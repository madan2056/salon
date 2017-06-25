@extends('frontend.layout.master')
@push('css')

@endpush

@section('content')

    <div class="titleArea">
        <div class="overlayBox">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h1>Appointment</h1>
                        <div class="breadCrumbTop"><a href="/">Home</a> &raquo; Appointment</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="PageArea">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-8 col-sm-7 col-xs-12">
                    <div class="leftSide">
                        <p>Please select the appropriate service you want to take appointment for.</p>
                        <div class="appointmentFormPackage">
                            <div class="errorMessage">
                                <ul>
                                    <li>Please enter a valid E-mail Id.</li>
                                    <li>Please enter your contact number.</li>
                                    <li>Please choose a appropriate service.</li>
                                </ul>
                            </div>
                            <div class="successMessage"> Thank you for choosing our service. We will get back to you shortly! </div>
                            <div class="clear"></div>
                            <form>
                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="heading2">
                                            <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="false" aria-controls="collapse2">Waxing</a> </h4>
                                        </div>
                                        <div id="collapse2" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading2">
                                            <div class="panel-body">
                                                <ul class="clearfix">
                                                    <li>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox">
                                                                Underarms <span>($10)</span></label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox">
                                                                Full/half arms <span>($35/25)</span></label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox">
                                                                Full/half legs <span>($45/30)</span></label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox">
                                                                Bikini line <span>($20)</span></label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox">
                                                                Brazilian (Women’s Only) (<span>$40)</span></label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox">
                                                                Bikini &amp; Brazilian (Women’s Only) <span>($50)</span></label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox">
                                                                Stomach <span>($20)</span></label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox">
                                                                Chest <span>($20 &amp; up)</span></label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox">
                                                                Eyebrow <span>($8)</span></label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox">
                                                                Upper lips/chin/neck <span>($5)</span></label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox">
                                                                Side burns <span>($5 &amp; up)</span></label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox">
                                                                Full face <span>($25)</span></label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox">
                                                                Full face &amp; neck <span>($30)</span></label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox">
                                                                Full front <span>($40)</span></label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox">
                                                                Full back <span>($40)</span></label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox">
                                                                Full body <span>($150 &amp; up)</span></label>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="heading3">
                                            <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="false" aria-controls="collapse3">Facials</a> </h4>
                                        </div>
                                        <div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
                                            <div class="panel-body">
                                                <h3>Facial (Dermalogica)</h3>
                                                <ul class="clearfix">
                                                    <li>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox">
                                                                Anti-aging facial <span>($60)</span></label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox">
                                                                Acne treatment <span>($45)</span></label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox">
                                                                Skin brightening facial <span>($55)</span></label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox">
                                                                Hyper pigmentation treatment <span>($60)</span></label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox">
                                                                Teenage cleanup facial <span>($45)</span></label>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <h3>Facial (Asin product)</h3>
                                                <ul class="clearfix">
                                                    <li>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox">
                                                                Gold facial <span>($50)</span></label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox">
                                                                Papaya facial <span>($50)</span></label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox">
                                                                Organic fresh fruits facial with vitamin C <span>($70)</span></label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox">
                                                                Deep pore cleansing facial <span>($55)</span></label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox">
                                                                Skin brightening facial with bleach <span>($70)</span></label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox">
                                                                Oily skin treatment <span>($60)</span></label>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="heading4">
                                            <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse4" aria-expanded="false" aria-controls="collapse4">Cosmetic Tattoo</a> </h4>
                                        </div>
                                        <div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading4">
                                            <div class="panel-body">
                                                <ul class="clearfix">
                                                    <li>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox">
                                                                Eyebrow <span>($199)</span></label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox">
                                                                Eyeliner <span>($199)</span></label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox">
                                                                Eyeliner up &amp; down <span>($250)</span></label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox">
                                                                Lip liner <span>($199)</span></label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox">
                                                                Touch up (yearly) <span>($99)</span></label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox">
                                                                Beauty mark <span>($45)</span></label>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="heading5">
                                            <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse5" aria-expanded="false" aria-controls="collapse5">Eyelashes Ext / Perm / Tinting</a> </h4>
                                        </div>
                                        <div id="collapse5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading5">
                                            <div class="panel-body">
                                                <ul class="clearfix">
                                                    <li>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox">
                                                                Eyelashes Perm <span>($50)</span></label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox">
                                                                Strip/false eyelashes <span>($20)</span></label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox">
                                                                Cluster full set <span>($50)</span></label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox">
                                                                Individual/full set <span>($75)</span></label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox">
                                                                Eyelashes touchup <span>($35)</span></label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox">
                                                                Eyelashes tinting <span>($20)</span></label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox">
                                                                Eyebrow tinting <span>($15)</span></label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox">
                                                                Eyelashes &amp; eyebrow tinting <span>($30)</span></label>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="heading6">
                                            <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse6" aria-expanded="false" aria-controls="collapse6">Body Massage, Hair &amp; Hair Package</a> </h4>
                                        </div>
                                        <div id="collapse6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading6">
                                            <div class="panel-body">
                                                <h3>BODY MASSAGE</h3>
                                                <ul class="clearfix">
                                                    <li>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox">
                                                                Deep tissues massage <span>($55)</span></label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox">
                                                                Swedish massage <span>($55)</span></label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox">
                                                                Stone massage <span>($55)</span></label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox">
                                                                Deep relaxation <span>($55)</span></label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox">
                                                                All massage (30 mins) <span>($30)</span></label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox">
                                                                Stress relief scalp massage <span>($30)</span></label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox">
                                                                Oil scalp massage (15 mins) <span>($15)</span></label>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <h3>HAIR</h3>
                                                <ul class="clearfix">
                                                    <li>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox">
                                                                Men’s hair cut <span>($10.99)</span></label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox">
                                                                Men’s hair color <span>($30)</span></label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox">
                                                                Women’s hair cut <span>($17)</span></label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox">
                                                                Hair color <span>($45 &amp; up)</span></label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox">
                                                                Full highlight <span>($65 &amp; up)</span></label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox">
                                                                Partial highlight <span>($40 &amp; up)</span></label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox">
                                                                Permanent wave (perm) <span>($80 &amp; up)</span></label>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <h3>Hair Package</h3>
                                                <ul class="clearfix">
                                                    <li>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox">
                                                                Shampoo &amp; blow-dry <span>($20 &amp; up)</span></label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox">
                                                                Shampoo, color, cut &amp; blow-dry <span>($70 &amp; up)</span></label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox">
                                                                Shampoo, color with treatment, cut &amp; blow dry <span>($80 &amp; up)</span></label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox">
                                                                Full highlight, color with treatment, cut &amp; blow dry <span>($130 &amp; up)</span></label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox">
                                                                Partial highlight, color with treatment <span>($110)</span></label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox">
                                                                All lift &amp; tone <span>($80 &amp; up)</span></label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox">
                                                                Shampoo basic set <span>($20 &amp; up)</span></label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox">
                                                                Color, partial highlight, cut, blow-dry <span>($100)</span></label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox">
                                                                Touch up <span>($45)</span></label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox">
                                                                Oil treatment with vitamin C<br>
                                                                <em>Note: Deep condition extra 	$20</em> <span>($20)</span></label>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="heading7">
                                            <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse7" aria-expanded="false" aria-controls="collapse7">Bridal</a> </h4>
                                        </div>
                                        <div id="collapse7" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading7">
                                            <div class="panel-body">
                                                <ul class="clearfix">
                                                    <li>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox">
                                                                Party hair &amp; makeup <span>($70)</span></label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox">
                                                                Party kids hair <span>($30)</span></label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox">
                                                                Blow/flat/curly hair <span>($35)</span></label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox">
                                                                Party undo <span>($50)</span></label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox">
                                                                Bridal set (hair makeup, henna &amp; eyelashes) <span>($350)</span></label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox">
                                                                Bridal henna <span>($150)</span></label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox">
                                                                Henna Tattoo <span>($10 &amp; up)</span></label>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="heading8">
                                            <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse8" aria-expanded="false" aria-controls="collapse8">Eyebrow Micro blading</a> </h4>
                                        </div>
                                        <div id="collapse8" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading8">
                                            <div class="panel-body">
                                                <ul class="clearfix">
                                                    <li>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox">
                                                                Eyebrow Micro blading <span>($219)</span></label>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="appointForm">
                                    <h2>Booking Details</h2>
                                    <div class="row">
                                        <div class="col-md-6 col-xs-12">
                                            <div class="form-group">
                                                <label>Full Name</label>
                                                <input type="text" class="form-control" placeholder="Full Name" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="form-group">
                                                <label>Email Id</label>
                                                <input type="email" class="form-control" placeholder="Email Id" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="form-group">
                                                <label>Contact No.</label>
                                                <input type="tel" class="form-control" placeholder="Contact No." />
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="form-group">
                                                <label>Address</label>
                                                <input type="text" class="form-control" placeholder="Address" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="form-group">
                                                <label>Prefered Date</label>
                                                <input type="text" class="form-control" placeholder="Prefered Date" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="form-group">
                                                <label>Prefered Time</label>
                                                <input type="text" class="form-control" placeholder="Prefered Time" />
                                            </div>
                                        </div>
                                        <div class="col-xs-12">
                                            <div class="form-group">
                                                <label>Message</label>
                                                <textarea class="form-control"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-xs-12">
                                            <div class="form-group">
                                                <button type="submit" class="btn"><i class="fa fa-send"></i> <strong>SUBMIT NOW</strong></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                @include('frontend.includes.sidebar')
            </div>
        </div>
    </div>

@endsection
