@extends('layouts.printLayout')

@section('styles')
<style type="text/css">
    .fixed-menu, #cl-wrapper {
        padding-top: 25px;
    }

    .form-inline {
        width: 100%;
    }

	.form-inline .form-control {
		width: 100%;
	}

    .form-group {
        margin: 8px 0;
    }

    #item-form .form-inline .has-feedback .form-control-feedback {
        top: 25px;
    }

    #item-form .select2-container--default .select2-selection--single .select2-selection__rendered {
        line-height: 34px;
    }

    .select2 {
        width: 100% !important;
    }

    .block-flat .content h4 {
        margin-top: initial;
        line-height: 16px;
    }

    .bg-warning {
        background-color: #ffe871;
    }

    .total {
        border-top: 1px solid #000;
        border-bottom-style: double;
    }

    .page-head {
        padding: 0px 25px;
    }

    h3 {
        margin-top: 10px;
    }

    .bordered {
         border-top: 1px solid #000;
    }

    .block-flat {
        padding: 10px 20px;
    }

    .content {
        margin-top:-20px
    }

    .block-flat .content {
        padding: 5px 3px 0 3px;
    }

    .vcenter {
        display: inline-block;
        vertical-align: middle;
        float: none;
    }
</style>
@stop

@section('breadcrumbs')
<!-- <li><a href="{{ URL::route('proposal.index.get') }}">Proposal Products</a></li>
<li class="active">{{ $proposal->id ? 'Print' : 'Create'  }}</li> -->
@stop

@section('page-header')
    
<div class="row">
    <div class="col-xs-3 vcenter">
        <img src="/images/comcast-business-class-logo.gif" width="300px" class="hidden-print" />
        <img src="/images/comcast-business-class-logo.gif" width="100px" class="visible-print-inline-block" />
    </div>
    <div class="col-xs-7 vcenter">
        <h3 class="hidden-print">Print Service Proposal for {{ $proposal->customer }}</h3>
    </div>
    <div class="col-xs-1 vcenter">
        <button class="btn btn-success pull-right hidden-print" onclick="window.print();"><i class="fa fa-print"></i> Print</button>
    </div>
</div>
@stop

@section('sidebar')

@stop

@section('content')
                    
    <div class="block-flat">
        <div class="content">
            <div class="row">
                <div class="col-xs-4">
                    <div class="form-group">
                        <label for="customer">Customer Name</label><br />
                        <strong>{{ $proposal->customer }}</strong>
                    </div>
                </div>
                <div class="col-xs-4">
                    <div class="form-group">
                        <label for="product_package_id">Product Packages</label><br />
                        <strong>{{ $proposal->productPackage->name }}</strong>
                    </div>
                </div>
                <div class="col-xs-4">
                    <div class="form-group">
                        <label for="agreement_length_id">Agreement Length</label><br />
                        <strong>{{ $proposal->agreementLength->name }}</strong>
                    </div>
                </div>
            </div>
            <h4><strong><strong>Internet</strong></strong></h4>
            <div class="row">
                <div class="col-xs-8 bordered">
                    <div class="form-group">
                        <label for="internet_product_id">Service Speed</label><br />
                		{{ $proposal->internetProduct->name }}
                    </div>
                </div>
                <div class="col-xs-2 text-center bordered">
                    <div class="form-group">
                        <label for="internet_product_price">Cost</label><br />
                		{{ $proposal->internet_product_price }}
                    </div>
                </div>
                <div class="col-xs-2 text-center bordered">
                    <div class="form-group">
                        <label for="internet_product_cost">Extended</label><br />
                		{{ $proposal->internet_product_price_extended }}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-8">
                    <div class="form-group">
                        <label for="static_ip_product_id">Static IP Address(es)</label><br />
                		{{ $proposal->staticIpProduct->name }}
                    </div>
                </div>
                <div class="col-xs-2 text-center">
                    <div class="form-group">
                        <label for="static_ip_product_price">Cost</label><br />
                		{{ $proposal->static_ip_product_price }}
                    </div>
                </div>
                <div class="col-xs-2 text-center">
                    <div class="form-group">
                        <label for="static_ip_product_price_extended">Extended</label><br />
                		{{ $proposal->static_ip_product_price_extended }}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-8">
                    <div class="form-group">
                        <label for="">Equipment</label><br />
                        Modem
                    </div>
                </div>
                <div class="col-xs-2 text-center">
                    <div class="form-group">
                        <label for="modem_rental_price">Cost</label><br />
                        {{ $proposal->modem_rental_price }}
                    </div>
                </div>
                <div class="col-xs-2 text-center">
                    <div class="form-group">
                        <label for="modem_rental_price_extended">Extended</label><br />
                        {{ $proposal->modem_rental_price_extended }}
                    </div>
                </div>
            </div>

            <h4><strong>Voice</strong></h4>
            <div class="row">
                <div class="col-xs-8 bordered">
                    <div class="form-group">
                        <label for="voice_product_id">First 1-3 Lines</label><br />
                        {{ $proposal->voice_lines_under_four_qty }}
                    </div>
                </div>
                <div class="col-xs-2 text-center bordered">
                    <div class="form-group">
                        <label for="">Cost</label><br />
                        {{ $proposal->voice_lines_under_four_price }}
                    </div>
                </div>
                <div class="col-xs-2 text-center bordered">
                    <div class="form-group">
                        <label for="">Extended</label><br />
                        {{ $proposal->voice_lines_under_four_price_extended }}
                    </div>
                </div>
            </div>
            <div class="row" id="4-plus-row" @if($proposal->voice_lines_over_four_qty == '0') style="display: none" @endif>
                <div class="col-xs-8">
                    <div class="form-group">
                        <label for="agreement_length_id">4+ Lines</label><br />
                        {{ $proposal->voice_lines_over_four_qty }}
                    </div>
                </div>
                <div class="col-xs-2 text-center">
                    <div class="form-group">
                        <label for="voice_lines_over_four_price">Cost</label><br />
                        {{ $proposal->voice_lines_over_four_price }}
                    </div>
                </div>
                <div class="col-xs-2 text-center">
                    <div class="form-group">
                        <label for="voice_lines_over_four_price_extended">Extended</label><br />
                        {{ $proposal->voice_lines_over_four_price_extended }}
                    </div>
                </div>
            </div>
                
            <h4><strong>TV</strong></h4>
            <div class="row">
                <div class="col-xs-8 bordered">
                    <div class="form-group">
                        <label for="tv_product_price">Channel Package</label><br />
                        {{ $proposal->tvProduct->name }}
                    </div>
                </div>
                <div class="col-xs-2 text-center bordered">
                    <div class="form-group">
                        <label for="tv_product_price">Cost</label><br />
                        {{ $proposal->tv_product_price }}
                    </div>
                </div>
                <div class="col-xs-2 text-center bordered">
                    <div class="form-group">
                        <label for="tv_product_price_extended">Extended</label><br />
                        {{ $proposal->tv_product_price_extended }}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-8">
                    <div class="form-group">
                        <label for="additional_tv_outlets_qty">Additional outlets (after 1<sup>st</sup>)</label><br />
                        {{ $proposal->additional_tv_outlets_qty or '0' }}
                    </div>
                </div>
                <div class="col-xs-2 text-center">
                    <div class="form-group">
                        <label for="additional_tv_outlets_price">Cost</label><br />
                        {{ $proposal->additional_tv_outlets_price or '0.00' }}
                    </div>
                </div>
                <div class="col-xs-2 text-center">
                    <div class="form-group">
                        <label for="additional_tv_outlets_price_extended">Extended</label><br />
                        {{ $proposal->additional_tv_outlets_price_extended or '0.00' }}
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-8">
                    <div class="form-group">
                        <label for="additional_hd_outlets_qty">HD Service per Outlet</label><br />
                        {{ $proposal->additional_hd_outlets_qty or '0' }}
                    </div>
                </div>
                <div class="col-xs-2 text-center">
                    <div class="form-group">
                        <label for="additional_hd_outlets_price">Cost</label><br />
                        {{ $proposal->additional_hd_outlets_price or '0.00' }}
                    </div>
                </div>
                <div class="col-xs-2 text-center">
                    <div class="form-group">
                        <label for="additional_hd_outlets_price_extended">Extended</label><br />
                        {{ $proposal->additional_hd_outlets_price_extended or '0.00' }}
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-offset-8 col-xs-2 text-center total bg-warning">
                    <h4 style="margin: 0px"><strong>Total Monthly</strong></h4>
                    <small>taxes and fees apply</small>
                </div>
                <div class="col-xs-2 text-center total">
                    <h4 style="margin-bottom: 3px; line-height: 30px;">{{ $proposal->total_monthly_charges }}</h4></h4>
                </div>
            </div>

            <h4><strong>1 time fees</strong></h4>
            <div class="row">
                <div class="col-xs-8 bordered">
                    <label for="standard_installation_fee">Standard Installation</label><br />
                    <div class="form-group">
                        <h4 id="product-package-label">{{ $proposal->productPackage->name }} @ {{ $proposal->agreementLength->name }}</h4></h4>
                    </div>
                </div>
                <div class="col-xs-2 text-center bordered">
                    <div class="form-group">
                        <label for="standard_installation_fee_price">Cost</label><br />
                        {{ $proposal->standard_installation_fee_price }}
                    </div>
                </div>
                <div class="col-xs-2 text-center bordered">
                    <div class="form-group">
                        <label for="standard_installation_price_extended">Extended</label><br />
                        {{ $proposal->standard_installation_fee_price_extended }}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-8">
                    <div class="form-group">
                        <label for="phone_activation_qty">Phone Activation(s)</label><br />
                        {{ $proposal->phone_activation_qty }}
                    </div>
                </div>
                <div class="col-xs-2 text-center">
                    <div class="form-group">
                        <label for="standard_installation_fee_price">Cost</label><br />
                        {{ $proposal->phone_activation_price }}
                    </div>
                </div>
                <div class="col-xs-2 text-center">
                    <div class="form-group">
                        <label for="standard_installation_price_extended">Extended</label><br />
                        {{ $proposal->phone_activation_price_extended }}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-offset-8 col-xs-2 text-center total bg-warning">
                    <h4><strong>Total 1-Time Costs</strong></h4></h4>
                </div>
                <div class="col-xs-2 text-center total">
                    <h4 style="margin-bottom: 3px; line-height: 25px;">{{ $proposal->total_one_time_charges }}</h4></h4>
                </div>
            </div>
        </div>
    </div>
@stop

@section('javascript')

<script type="text/javascript">
    $(document).ready(function() {
       
    });
</script>

@stop
