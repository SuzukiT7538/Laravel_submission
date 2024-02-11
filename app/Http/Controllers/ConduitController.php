<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Article;
use App\Models\Comment;
use App\Models\TagArticle;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ConduitController extends Controller
{
    public function index(Request $request)
    {
        $allTags = Tag::orderBy('id', 'asc')->get();
        $articles = Article::with('tagArticle')->orderBy('id', 'desc')->paginate(5);
        $test = Article::with('tagArticle');
        return view('conduit.index', ['allTags'=>$allTags, 'articles'=>$articles, 'test'=>$test]);
    }

    public function article(Request $request, $slug, $id)
    {
        $article = Article::with('comment')->find($id);
        $tags = TagArticle::where('article_id', $id)->with('tags')->get();
        return view('conduit.article', ['article' => $article, 'tags' => $tags]);
    }

    public function addComment(Request $request, $slug, $id)
    {
        $request['author'] = 'Sasaki Kojirou';
        $request['article_id'] = $id;
        $this->validate($request, Comment::$rules);
        $comment = new Comment;
        $form = $request->all();
        unset($form['_token']);
        $comment->fill($form)->save();
        $redirect = '/article/' . $slug . '-' . $id;
        return redirect($redirect);
    }

    public function deleteArticle($slug, $id)
    {
        $article = Article::find($id);
        $article->delete();
        return redirect('/');
    }

    public function CEArticle()
    {
        $allTag = Tag::all();
        return view('conduit.CEArticle', ['allTag' => $allTag]);
    }

    public function publishArticle(Request $request)
    {
        $request['slug'] = $request['title'];
        $request['fav'] = 0;
        $request['author'] = 'Sasaki Kojirou';
        $this->validate($request, Article::$rules);
        $article = new Article;
        $form = $request->all();
        unset($form['tags']);
        unset($form['_token']);
        $article->fill($form)->save();

        $article = Article::orderBy('id', 'desc')->first();
        $articleId = $article->pluck('id')->all();
        $articleId = max($articleId);
        $tags = explode(',', trim($request['tags']));
        foreach ($tags as $tag) {
            $tagInfo = Tag::where('name', $tag)->get();
            $tagId = $tagInfo->pluck("id")->all();
            $tag_article = new TagArticle;
            $tag_article->insert(['article_id' => $articleId, 'tag_id' => $tagId[0]]);
        }
        return redirect('/');
    }

    public function editArticle($slug, $id)
    {
        $article = Article::find($id);
        $allTag = Tag::all();
        $tag_article = Article::find($id)->with('tagArticle')->get();
        $tag_article = $tag_article->toArray();
        $oldTags = '';
        foreach($tag_article[0]['tag_article'] as $key => $tag){
            if ($key === 0) {
                $oldTags .= $tag['name'];
            } else {
                $oldTags = $oldTags . ',' . $tag['name'];
            }
        }

        return view('conduit.CEArticle', ['article' => $article, 'allTag' => $allTag, 'tags'=>$oldTags]);
    }

    public function saveArticle(Request $request, $slug, $id)
    {
        $request['slug'] = $request['title'];
        $this->validate($request, Article::$rules);
        $article = Article::find($id);
        $form = $request->all();
        unset($form['tags']);
        unset($form['_token']);
        $article->fill($form)->save();

        $tags = explode(',', trim($request['tags']));
        $oldTags = [];
        foreach ($tags as $tag) {
            $tagInfo = Tag::where('name', $tag)->get();
            $tagId = $tagInfo->pluck("id")->all();
            $tag_article = Article::where('id', $id)->with('tagArticle')->get();
            $tag_article = $tag_article->toArray();
            foreach($tag_article[0]['tag_article'] as $tag){
                $oldTags[] = $tag['id'];
            }
            $array = array_search($tagId[0], $oldTags);
            if(!$array && $array !== 0) {
                $tag_article = new TagArticle;
                $tag_article->insert(['article_id' => $id, 'tag_id' => $tagId[0]]);
            }
        }
        $redirect = '/article/' . $slug . '-' . $id;
        return redirect($redirect);

    }
}
