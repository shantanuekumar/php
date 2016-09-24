@extends('layouts.master1')


@section('content')
        <section class="row new-post">
            <div class="col-md-6 col-md-offset-3">
                <header><h3>what's on your mind?</h3></header>
                <form action=" ">
                    <div class="form-group">
                        <textarea class="form-control" name="new-post" id="new-post" rows="10" placeholder="Your Post"></textarea>
                    </div>
                        <button type="submit" class="btn btn-primary">Create Posts</button>
                    
                </form>
            </div>

        </section>
        <section class="row posts">
            <div class="col-md-6 col-md-offset-3">
                <header>
                    <h3>what other people say...</h3>
                </header>
                <article class="post">
                    <p>i'm not gonna kill ya,i'm gonna hurt ya real bad.</p>
                
                <div class="info">
                    posted by jared leto on 23 Feb 2016
                </div>
                <div class="interaction">
                    <a href="#">Like</a> |
                    <a href="#">Dislike</a> |
                    <a href="#">Edit</a> |
                    <a href="#">Delete</a> 
                </div>
                </article>
                <article class="post">
                    <p>i'm not gonna kill ya,i'm gonna hurt ya real bad.</p>
                
                <div class="info">
                    posted by jared leto on 23 Feb 2016
                </div>
                <div class="interaction">
                    <a href="#">Like</a> |
                    <a href="#">Dislike</a> |
                    <a href="#">Edit</a> |
                    <a href="#">Delete</a> 
                </div>
                </article>
            </div>

        </section>

@endsection