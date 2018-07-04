
<div id="{{$person->id}}" class="modal fade" role="dialog" style="background-color: rgba(0,0,0,0.96);">
  <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header" >
          <h4 class="modal-title pull-left">{{ucwords(strtolower($person->name))}}</h4>
          <button type="button" class="close pull-right" data-dismiss="modal" style="font-size: 30px;">&times;</button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-lg-5">
              <img  src="{{asset('uploads/featured/'.$person->image.'')}}" style="width: 100%;  margin:0px !important;">

            </div>
            <div class="col-lg-7">
              <h1 style="border-bottom: 1px solid">{{ucwords(strtolower($person->name))}}</h1>
              <h3>Added: {{date('jS M Y', strtotime($person->created_at))}}</h3>
              @if($person->website != null)
                <h3>{{$person->website}}</h3>
              @endif

            </div>

          </div>
          <br>
          <div class="row col-12">
            <blockquote class="blockquote">
              {!! (nl2br(e($person->desc))) !!}
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

<div id="{{$person->id}}_edit" class="modal fade" role="dialog" style="background-color: rgba(0,0,0,0.96);">
  <form class="form-vertical" role="form" method="POST" action="{{ url('admin/featuring_edit/'.$person->id) }}" >
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header" >
            <h4 class="modal-title pull-left">{{ucwords(strtolower($person->name))}}</h4>
            <button type="button" class="close pull-right" data-dismiss="modal" style="font-size: 30px;">&times;</button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-lg-5">
                <img  src="{{asset('uploads/featured/'.$person->image.'')}}" style="width: 100%;  margin:0px !important;">

              </div>
              <div class="col-lg-7">
                <div class="form-group">
                  <label for="name" class="pull-left">Name:</label>
                  <input type="text" id="name" name="name" class="form-control" style="" value="{{$person->name}}">
                </div>
                <h3>Added: {{date('jS M Y', strtotime($person->created_at))}}</h3>
                <br>
                <div class="form-group">
                  <label for="more" class="pull-left">More Info:</label>
                  <textarea class="form-control textarea_auto_resize" name="website" placeholder="www.allangrahambooks.com" style="resize: none; min-height: 50px !important;">{{$person->website}}</textarea>
                </div>

              </div>

            </div>
            <br>
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
