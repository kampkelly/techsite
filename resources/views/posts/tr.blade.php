@extends('layouts.master')

@section('content')
  <div class="row">
    <!--INCLUDE SIDEBAR HERE -->
        <div class="container">
               <h2 style="text-decoration:underline;">Make A New Post</h2>
			<hr>
			@include('../partials/errors')
                <div class="">
                    <form method="POST" action="/postse" files="true" id="feedbackform" class="form-horizontal" enctype="multipart/form-data" role="form" name="sampleform">
						{{csrf_field()}}
                        <div class="form-group">
                            <label class="col-sm-2" for="post_title">Post Title
                                                </label>
                            <input type="text" name="post_title" id="post_title" placeholder="Enter Title" class="form-control" ng-model="title">
                            <div id="post_title-status"></div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2" for="post_image">Preview Image
                                                </label>
                            <input type="file" name="post_image" id="fileupload" placeholder="Enter Title" class="btn btn-success">
                        </div>
                        <b>Live Preview</b>
                        <br />
                        <br />
                        <div id="dvPreview">
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2" for="post_description">Body
                                                </label>
                            <textarea name="post_description" id="post_description" ng-model="body"></textarea>
                        </div>
                        <div id="post_description-status"></div>
                        <div class="form-group">
                            <label for="post_category" class="col-sm-3">Specialization</label>
                            <select class="form-control" name="post_category" id="post_category" ng-model="category">
                                                    <option value="male" selected>Select Category</option>
                                @foreach($categories as $category)                 
									<option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                                                </select>
                        </div>
                        <div class="form-group">
                            <div id="tag_show" class="well">
                                <span class="pull-left" style="font-weight:bold;">Made Tags:</span>
                               
                                    <span style="color:blue">pc news computers</span>,
                                   
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tag_name">Tags:</label>
                            <input type="text" name="tags" id="tag_name" placeholder="Enter tags" class="form-control" ng-model="tags">
                        </div>
                        <div class="form-group">
                            <label for="status" class="col-sm-6 col-xs-6">Post Status</label>
                            <select class="col-sm-3 col-xs-3 form-control" name="status" id="status" ng-model="status">
                                                    <option value="draft" selected>Draft</option>
                                                    <option value="Save">Save</option>
                                                    <option value="Published">Publish</option>
                                                </select>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2" for="post_submit">
                                                </label>

                            <!--   <input type="submit" name="post_preview" id="post_preview" value="Create Post" class="btn btn-warning btn-block"> -->
                        </div>
                        <!--  <input type="submit" name="post_submit" id="post_submit" value="Create Post" class="btn btn-primary btn-block">
                        <input type="submit" name="post_preview" id="post_preview" value="Preview Post" formaction="preview_post.php" class="btn btn-warning btn-block" target="blank"> -->
                        <button type="submit" name="post_submit" id="post_submit" class="btn btn-primary btn-block">Create Post</button>
                        <div style="height:10px;"></div>
                        <button type="submit" name="post_preview" id="post_preview" formaction="/preview" formtarget="_blank" class="btn btn-warning">Preview Post</button>
                    </form>
                    <!--   <iframe name="vot" style="display:none;"></iframe> -->
                    <h3>Create A New Tag</h3>
                    <form method="post" action="/postse" id="feedbackfor">
						{{csrf_field()}}
                        <label for="tag_name">Tag name:</label>
                        <input type="text" name="tag_name" id="tag_name">
                        <input type="submit" name="tags_submit" value="Create">
                    </form>
                    <script type="text/javascript">
                        //Example 1:

                        fieldlimiter.setup({
                            thefield: document.sampleform.post_description, //reference to form field
                            maxlength: 500,
                            statusids: ["post_description-status"], //id(s) of divs to output characters limit in the form [id1, id2, etc]. If non, set to empty array [].
                            onkeypress: function(maxlength, curlength) { //onkeypress event handler
                                if (curlength < maxlength) //if limit hasn't been reached
                                    this.style.border = "2px solid gray" //"this" keyword returns form field
                                else
                                    this.style.border = "2px solid red"
                            }
                        })

                        //Example 2:

                        fieldlimiter.setup({
                            thefield: document.getElementById("post_title"), //reference to form field
                            maxlength: 30,
                            statusids: ["post_title-status"], //id(s) of divs to output characters limit. If non, set to empty array [].
                            onkeypress: function(maxlength, curlength) { //onkeypress event handler
                                //define custom event actions here if desired
                            }
                        })

                    </script>
                </div>
                <!--PREVIEW STARTS HERE -->

                <!--PREVIEW ENDS HERE -->
        </div>

</div>
@endsection