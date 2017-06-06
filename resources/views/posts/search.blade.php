@extends('layouts.master')

@section('content')
  <div class="row">
    <!--INCLUDE SIDEBAR HERE -->
    <div class="col-sm-9">
        <div class="contaier-fluid">
                @if(isset($details))
                    <h2> Posts matching "{{ $query }}" </b> are :</h2>
                    <div id="other_pos"> 
                      @foreach($details as $post)
                        <div href="/post/{{$post->id}}" class="other_post col-sm-4 pan_pad">
                            <div class="panel panel-deault" style="height:360px !important;">  
                                    <h4><a href="/post/{{$post->id}}">{{ str_limit($post->title) }}</a></h4>
                                    <h6 class="text-right small">{{$post->created_at}} </h6>
                            <div class="panel-headin">
                                    <img src="https://cvws.icloud-content.com/B/AS0v8p0nVP9xE3ESAIPc7540EAg5AX3H3CMGfUQzPXgcmfdBGt372zdP/creative-869200_1920.jpg?o=AtvTt6lcJkUSsGvKYrHddMs4te7f_O_P8x92l8IjZ44M&v=1&x=3&a=BTzroYiS5sBbAzRFOw&e=1495364358&k=SaC-TypsVqUXJYY31bUSMA&fl=&r=71973090-169e-4f01-8049-ddc2b3d7369e-1&ckc=com.apple.clouddocs&ckz=com.apple.CloudDocs&p=64&s=J6QB-b58e_Lmb1QkLfeIbcxKEUs&cd=i" width="100%">
                                    <p class="sp" style="margin-top:0px;">{{ str_limit(strip_tags($post->body_text), 2) }} <a href="post/{{$post->id}}" class="btn btn-xs btn-primary">Read More...</a> </p>       
                            </div>
                            </div>
                        </div>
                       @endforeach 
                    </div>
                    <div class="col-sm-12"> 
                        {{ $details->links() }}
                    </div>
                @endif
                @if(isset($message))
                    <h2> Your search for "{{ $query }}" </b> returned :</h2>
                    {{$message}}
                @endif
        </div>
    </div>
     @include('../partials/right-sidebar')

</div>
@endsection