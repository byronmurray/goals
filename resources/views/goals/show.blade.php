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
                    
                    <h2>{{ $goal->title }}</h2>

                    <p>Created {{ $goal->created_at }} | Goal to be completed in xxx days/weeks/months</p>

                    <strong>Specific</strong>

                    <p>{{ $goal->specific }}</p>

                    <strong>Measurable</strong>

                    <p>{{ $goal->measurable }}</p>

                    <strong>Achievable</strong>

                    <p>{{ $goal->achievable }}</p>

                    <strong>Relevant</strong>

                    <p>{{ $goal->relevant }}</p>

                    <strong>Timely</strong>

                    <p>{{ $goal->time }}</p>

                    <strong>Summary</strong>

                    <p>{{ $goal->summary }}</p>


                    <form method="" action="">

                      <div class="form-group">
                        <label>Notify Me</label>
                        <select>
                            <option value="">Daily</option>
                            <option value="">Weekly</option>
                            <option value="">Fortnightly</option>
                            <option value="">Monthly</option>
                            <option value="">Quarterly</option>
                            <option value="">Yearly</option>
                            <option value="">Never</option>
                        </select>
                      </div>
                   
                      <div class="form-group">
                        <label>Comments</label>
                        <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
                      </div>

                      <div class="form-group">
                        <button type="submit" class="btn btn-default">Add Comment</button>
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