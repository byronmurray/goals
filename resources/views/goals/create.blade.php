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
                        <label>Title</label>
                        <input type="text" id="title" class="form-control">
                      </div>

                      <div class="form-group">
                        <label><span class="smart">S</span>pecific</label>
                        <strong>Can you easily state your goal?</strong>
                        <p>Set a goal that has a definitive point of success. What do you want to accomplish?</p>
                        <textarea name="" id="" cols="30" rows="6" class="form-control"></textarea>
                      </div>

                      <div class="form-group">
                        <label><span class="smart">M</span>easurable</label>
                        <strong>How will you know when you’ve reached your goal? </strong>
                        <p>It is important to track progress when you’re attempting to reach a goal. </p>
                        <textarea name="" id="" cols="30" rows="6" class="form-control"></textarea>
                      </div>

                      <div class="form-group">
                        <label><span class="smart">A</span>ttainable</label>
                        <strong>How can your goal be accomplished?</strong>
                        <p>Be realistic about your goals. Don’t set yourself up for failure by being greedy or short-sighted. </p>
                        <textarea name="" id="" cols="30" rows="6" class="form-control"></textarea>
                      </div>

                      <div class="form-group">
                        <label><span class="smart">R</span>elevant</label>
                        <strong>Is this goal worth working hard to accomplish?</strong>
                        <p>Your goals should be in line with things you want to improve in your life.</p>
                        <textarea name="" id="" cols="30" rows="6" class="form-control"></textarea>
                      </div>

                      <div class="form-group">
                        <label><span class="smart">T</span>imely</label>
                        <strong>When will you complete this goal by?</strong>
                        <p>Give yourself enough time to achieve your goals, but don’t set deadlines so far in advance that you lose motivation. Be realistic! </p>
                        <textarea name="" id="" cols="30" rows="6" class="form-control"></textarea>
                      </div>

                      <div class="form-group">
                        <label>Summary</label>
                        <strong>Example: I will achive this goal by this date and i will know I have achived this by...</strong>
                        <p>Give yourself enough time to achieve your goals, but don’t set deadlines so far in advance that you lose motivation. Be realistic! </p>
                        <textarea name="summary" id="" cols="30" rows="6" class="form-control"></textarea>
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