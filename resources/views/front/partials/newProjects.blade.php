
        <div class="NEWPROJECTS">
            <div class="container-fluid">
                <div class="NEWPROJECTSContent">
                    <div class="Titel">
                        <h3>{{__('home.NEW PROJECTS')}}</h3>
                        <h1>{{__('home.Latest Listings')}}</h1>
                    </div>
                    
                    <div class="comtentLatest">
                        <div class="row">
                            @if(!empty($projects))
                            @foreach($projects as $project)
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="ProjectItem">
                                    <div class="projecttop">
                                        <div class="images">
                                            <img src="{{Voyager::image($project->image)}}">
                                        </div>
                                        <a href="{{route('project',$project->id)}}" class="overlay">
                                            <span class="imgegall">
                                                <i class="far fa-images"></i> {{count($project->images)}}
                                            </span>
                                        </a>
                                    </div>
                                    <div class="projectbootom">
                                        <a href="{{route('project',$project->id)}}">{{$project->title}}</a>
                                        <p>{{$project->address}}</p>
                                    </div>

                                </div>
                            </div>
                            @endforeach
                           @endif
                        </div>
                    </div>
                </div>
            </div>

        </div>
