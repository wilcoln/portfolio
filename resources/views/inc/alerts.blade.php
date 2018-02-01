@if(count($errors) || session('success'))
   <div class="modal" id="alerts-modal" >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">{{count($errors)?'Something went wrong...': 'Success!'}}</h5>
            <button class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
              @if(count($errors))
                @foreach($errors->all() as $error)
                    <div class="alert alert-light mb-3">
                        {{$error}}
                    </div>
                @endforeach
              @else
                    <div class="alert alert-light mb-3">
                        {{session('success')}}
                    </div> 
             @endif
          </div>
          <div class="modal-footer">
            <button class=" btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
@endif