<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Add Shipment</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            @if (isset($setting->service_id) && isset($setting->from_zone_id) && isset($setting->from_sub_zone_id))
                <form action="{{ route('shipment.store') }}" id="add_ship" method="post">
                    @csrf
                    <div class="modal-body">
                        <input type="hidden" id = "ids" name="ids" value = "">
                        <input type="hidden" id = "setting" name="setting">
                        <p class="lead">Send shipments to shipping system?</p>
                    </div>
                </form>
                <div class="modal-footer">
                    <button form="add_ship" type="submit" class="btn btn-primary">Approve</button>
                </div>
            @else
                <div class="row">
                    <div class="col-12 p-3">
                        <p>Please Add Service, Zone and Subzone</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="{{ route('settings') }}" class="btn btn-primary">Go to Settings</a>
                </div>
            @endif
        </div>
    </div>
</div
