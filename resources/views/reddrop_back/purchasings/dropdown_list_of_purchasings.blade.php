<label><span id="notif-label"><b>Your blood Box</b></span></label>
    @foreach($purchasings as $purchase)
    <li class="drop-down-notif list" style="width: 30em;">
        <form id="read-form">
            <a class="member-notif" style="cursor: pointer; text-decoration: none;" 
                onclick="viewOrders('698602', this)"
                data-pur-id-no="{{ $purchase->buying_id_no }}"
                data-pur-name="{{ $purchase->buying_company }}"
            >
                <h6 id="hic-name-l"><i class="fa fa-check-circle check" aria-hidden="true"></i> View orders - 
                                                                    
                </h6>
            </a>
        </form>
    </li>
@endforeach

@include('reddrop_back.back_scripts.Purchasings.manage_purchasings_box')

