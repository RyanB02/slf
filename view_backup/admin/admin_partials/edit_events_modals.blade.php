<div id="{{$event->id}}_edit" class="modal fade" role="dialog" style="background-color: rgba(0,0,0,0.96);">
  <form class="form-vertical" role="form" method="POST" action="{{ url('admin/featuring_edit/'.$event->id) }}" >
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header" >
            <h4 class="modal-title pull-left">{{ucwords(strtolower($event->name))}}</h4>
            <button type="button" class="close pull-right" data-dismiss="modal" style="font-size: 30px;">&times;</button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-lg-5">
                    <center>
                      <a class="//animated\\ fadeIn" style="color: inherit; text-decoration: none; font-family: Montserrat; font-size: 30px">{{$event->date[0]}}{{$event->date[1]}}</a>
                    </center>
                    <hr style="margin:0px">
                    <center>
                      <a class="//animated\\ fadeIn" style="color: inherit; text-decoration: none; font-family: Montserrat; font-size: 30px">{{$event->date[3]}}{{$event->date[4]}}</a>
                    </center>
                    <hr style="margin:0px">
                    <center>
                      <a class="//animated\\ fadeIn" style="color: inherit; text-decoration: none; font-family: Montserrat; font-size: 15px">{{$event->date[6]}}{{$event->date[7]}}{{$event->date[8]}}{{$event->date[9]}}</a>
                    </center>
              </div>
              <div class="col-lg-7">
                <div class="form-group">
                  <label for="name" class="pull-left">Name:</label>
                  <input type="text" id="name" name="name" class="form-control" style="" value="{{$event->name}}">
                </div>
                <h3>Added: {{date('jS M Y', strtotime($event->created_at))}}</h3>
                <br>
                <div class="form-group">
                  <label for="more" class="pull-left">More Info:</label>
                  <textarea class="form-control textarea_auto_resize" name="website" placeholder="www.allangrahambooks.com" style="resize: none; min-height: 50px !important;">{{$event->website}}</textarea>
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
