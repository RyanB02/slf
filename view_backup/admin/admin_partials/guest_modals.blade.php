
<div id="{{$author->id}}" class="modal fade" role="dialog" style="background-color: rgba(0,0,0,0.96);">
  <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header" >
          <h4 class="modal-title pull-left">{{ucwords(strtolower($author->name))}}</h4>
          <button type="button" class="close pull-right" data-dismiss="modal" style="font-size: 30px;">&times;</button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-lg-5">
              <img  src="{{asset('uploads/writers-speakers/'.$author->image.'')}}" style="width: 100%;  margin:0px !important;">

            </div>
            <div class="col-lg-7">
              <h1 style="border-bottom: 1px solid">{{ucwords(strtolower($author->name))}}</h1>
              <h3>Added: {{date('jS M Y', strtotime($author->created_at))}}</h3>
              @if($author->more != null)
                <h3>{!! make_clickable($author->more) !!}</h3>
              @endif

            </div>

          </div>
          <br>
          <div class="row col-12">
            <blockquote class="blockquote">
              {!! (nl2br(e($author->desc))) !!}
            </blockquote>
            
          </div>
        </div>
        <div class="card-footer">
          <div class="pull-left">
             <b>&copy; <?php echo date('Y');?> Saddleworth Literary Festival</b>
          </div>
          <div class="pull-right">
            <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
          </div>
        </div>
       
    </div>
  </div>
</div>

<div id="{{$author->id}}_edit" class="modal fade" role="dialog" style="background-color: rgba(0,0,0,0.96);">
  <form class="form-vertical" role="form" method="POST" action="{{ url('admin/edit_guest/'.$author->id) }}" >
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header" >
            <h4 class="modal-title pull-left">{{ucwords(strtolower($author->name))}}</h4>
            <button type="button" class="close pull-right" data-dismiss="modal" style="font-size: 30px;">&times;</button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-lg-5">
                <img  src="{{asset('uploads/writers-speakers/'.$author->image.'')}}" style="width: 100%;  margin:0px !important;">

              </div>
              <div class="col-lg-7">
                <div class="form-group">
                  <label for="name" class="pull-left">Name:</label>
                  <input type="text" id="name" name="name" class="form-control" style="" value="{{$author->name}}">
                </div>
                <h3>Added: {{date('jS M Y', strtotime($author->created_at))}}</h3>
                <br>
                <div class="form-group">
                  <label for="more" class="pull-left">More Info:</label>
                  <textarea class="form-control textarea_auto_resize" name="more" placeholder="To find out more, please go to www.allangrahambooks.com/" style="resize: none; min-height: 50px !important;">{{$author->more}}</textarea>
                </div>

              </div>

            </div>
            <br>
            <div class="row col-12">
              <div class="col-12">
                <div class="form-group">
                  <label for="desc" class="pull-left">Description:</label>
                  <textarea class="form-control" name="desc"  style="resize: none; width:100%; min-height:200px">{{$author->desc}}</textarea>
                </div>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <div class="pull-left">
               <b>&copy; <?php echo date('Y');?> Saddleworth Literary Festival</b>
            </div>
            <div class="pull-right">
                <div class="form-group">
                    <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                    &nbsp;
                    <button type="submit" class="btn btn-primary btn-sm pull-right">Submit Edits</button>
                </div>
                <input type="hidden" name="_token" value="{{ Session::token() }}">
            </div>
          </div>
         
      </div>
    </div>
  </form>
</div>
<div id="{{$author->id}}_options" class="modal fade" role="dialog" style="background-color: rgba(0,0,0,0.96);">
  <form class="form-vertical" role="form" method="POST" action="{{ url('admin/edit_guest/'.$author->id) }}" >
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header" >
            <h4 class="modal-title pull-left">{{ucwords(strtolower($author->name))}}</h4>
            <button type="button" class="close pull-right" data-dismiss="modal" style="font-size: 30px;">&times;</button>
          </div>
          <div class="modal-body">
          </div>
          <div class="card-footer">
            <div class="pull-left">
               <b>&copy; <?php echo date('Y');?> Saddleworth Literary Festival</b>
            </div>
            <div class="pull-right">
                <div class="form-group">
                    <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                    &nbsp;
                    <button type="submit" class="btn btn-primary btn-sm pull-right">Submit Edits</button>
                </div>
                <input type="hidden" name="_token" value="{{ Session::token() }}">
            </div>
          </div>
         
      </div>
    </div>
  </form>
</div>
