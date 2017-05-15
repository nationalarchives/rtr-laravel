<div class="margin-bottom-medium">
    <div class="clr" role="tabpanel" aria-labelledby="panel-{{ $loop->index + 1}}">
        <h3 class="align-center margin-bottom-medium">{{ $title }}</h3>
        <p class="align-center standfirst">Total records held <b>{{ number_format($transfer->total_records_held) }}</b></p>
        <div class="graph-bg">
            <ul class="graph pad-top-medium margin-bottom-medium pad-none">
                <li class="transfer">
                    <h4 class="margin-small margin-left-medium">Selected for transfer</h4>
                    <span class="clr"><span style="width:{{ $transfer->records_selected_for_transfer_under_lci_as_percentage_of_total }}%"></span><span
                                style="width:{{ $transfer->records_selected_for_transfer_as_percentage_of_total }}%"></span></span>
                    <ul>
                        <li class="clr"><span>{{ number_format($transfer->records_selected_for_transfer_under_lci) }}</span> <span>subject to a RI</span><span>{{ $transfer->records_selected_for_transfer_under_lci_as_percentage_of_total }}%</span>
                        </li>
                        <li class="marked clr"><span>{{ number_format($transfer->records_selected_for_transfer) }}</span>
                            <span>not subject to a RI</span><span>{{ $transfer->records_selected_for_transfer_as_percentage_of_total }}%</span>
                        </li>
                    </ul>
                </li>
                <li class="review">
                    <h4 class="margin-small margin-left-medium">Still to be reviewed</h4>
                    <span class="clr"><span style="width: {{ $transfer->records_still_to_be_reviewed_as_percentage_of_total }}%"></span><span
                                style="width: {{ $transfer->records_still_to_be_reviewed_under_lci_as_percentage_of_total }}%"></span></span>
                    <ul>
                        <li class="clr"><span>{{ number_format($transfer->records_still_to_be_reviewed_under_lci) }}</span>
                            <span>subject to a RI</span><span>{{ $transfer->records_still_to_be_reviewed_under_lci_as_percentage_of_total }}%</span>
                        </li>
                        <li class="marked clr"><span>{{ number_format($transfer->records_still_to_be_reviewed) }}</span>
                            <span>not subject to a RI</span><span>{{ $transfer->records_still_to_be_reviewed_as_percentage_of_total }}%</span></li>
                    </ul>
                </li>
                <li class="disposal">
                    <h4 class="margin-small margin-left-medium">Awaiting disposal</h4>
                    <span class="clr"><span style="width: {{ $transfer->awaiting_disposal_under_lci_as_percentage_of_total }}%"></span><span
                                style="width: {{ $transfer->awaiting_disposal_as_percentage_of_total }}%"></span></span>
                    <ul>
                        <li class="clr"><span>{{ number_format($transfer->awaiting_disposal_under_lci) }}</span> <span>subject to a RI</span>
                            <span>{{ $transfer->awaiting_disposal_under_lci_as_percentage_of_total }}%</span>
                        </li>
                        <li class="marked clr"><span>{{ number_format($transfer->awaiting_disposal) }}</span>
                            <span>not subject to a RI</span><span>{{ $transfer->awaiting_disposal_as_percentage_of_total }}%</span></li>
                    </ul>
                </li>
            </ul>
            <ul class="graph-key clr">
                <li class="key-item-one"><span class="indicator"></span><span>{{ number_format($transfer->total_under_lci) }}</span> total
                    records
                    subject to a RI
                </li>
                <li class="key-item-two"><span class="indicator"></span><span>{{ number_format($transfer->total_not_under_lci) }}</span> total
                    records
                    not subject to a RI
                </li>
            </ul>
        </div>
        <div class="graph-footer clr">
            <div class="pad-medium clr">
                <div class="float-left graph-foot-container">
                    <p class="margin-none pad-top-small pad-bottom-small standfirst float-left">Total
                        planned for transfer <b></b> &nbsp;out of <b></b></p>
                </div>
                <div class="float-right graph-foot-container">
                    <p class="margin-none pad-top-small pad-bottom-small text-left-to-right standfirst">
                        <a
                                href="http://www.nationalarchives.gov.uk/information-management/manage-information/selection-and-transfer/">More
                            on our transfer process&nbsp; &gt;</a></p>
                </div>
            </div>
        </div>
    </div>
</div>