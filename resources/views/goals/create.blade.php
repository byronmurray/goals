@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">

        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-heading">Main Menu</div>

                <div class="panel-body">
                    <ul>
                        <a href="#"><li>Home</li></a>
                        <a href="#"><li>Quickies</li></a>
                        <a href="#"><li>New Goal</li></a>
                        <a href="#"><li>Current</li></a>
                        <a href="#"><li>Completed</li></a>
                        <a href="#"><li>Non Completed</li></a>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">Main Content</div>

                <div class="panel-body">
                    <h2>Create a new goal</h2>

                    <form method="POST" action="/posts">

                      <div class="form-group">
                        <label>Email address</label>
                        <input type="text" id="title" class="form-control">
                      </div>

                      <div class="form-group">
                        <label>Specific</label>
                        <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
                      </div>

                      <div class="form-group">
                        <label>Measurable</label>
                        <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
                      </div>

                      <div class="form-group">
                        <label>Attainable</label>
                        <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
                      </div>

                      <div class="form-group">
                        <label>Relevant</label>
                        <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
                      </div>

                      <div class="form-group">
                        <label>Timely</label>
                        <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
                      </div>

                      <div class="form-group">
                        <button type="submit" class="btn btn-default">Submit</button>
                      </div>

                    </form>

                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-heading">Sidebar</div>

                <div class="panel-body">
                    <h3>Working on</h3>
                    <ul>
                        <a href="#"><li>Long term</li></a>
                        <a href="#"><li>Mid term</li></a>
                        <a href="#"><li>Long term</li></a>
                    </ul>

                    <h3>Archives</h3>
                    <ul>
                        <a href="#"><li>November 2016</li></a>
                        <a href="#"><li>December 2016</li></a>
                        <a href="#"><li>January 2017</li></a>
                    </ul>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection