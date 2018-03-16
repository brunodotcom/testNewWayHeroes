@extends('site.templates.panel')

@section('title')
    Heroes
@endsection

<div class="modal fade" id="dismissModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center" id="exampleModalLabel">Dismiss Modal</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body"> 
                <div id="heroImage"></div>
                <div id="heroAppeal" style="font-style: italic;"></div>                
                </br></br>
                <div id="finalQuestion">Do you <b>Really</b> want to dismiss Fulano?</div>                
            </div>
            <div class="modal-footer">
                <div class="left-side">
                    <button type="button" class="btn btn-default btn-link" data-dismiss="modal">Never mind</button>
                </div>
                <div class="divider"></div>
                <div class="right-side">
                    <button type="button" class="btn btn-danger btn-link" id="dismissButton" data-id="">Dismiss</button>
                </div>
            </div>
        </div>
    </div>
</div>