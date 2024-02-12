@extends('backend.adminLogin.layouts.app')
@section('title', 'Add Billing')
@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Billing</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('admin.loggedin')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Add Billing</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card p-4">
            <form action="{{route('billing.store')}}" method="post">
            @csrf
            <div class="card-head">
              <div class="row">
                <div class="col-md-4">
                  Name: <select name="p_id" class="form-control">
                    <option>Select Patient</option>
                    @foreach ($appointment as $item)
                        <option value="{{$item->p_id}}">{{$item->patient->name}}</option>
                    @endforeach
                  </select>

                  Date: <input type="date" name="date" class="form-control">
                </div>
              </div>
            </div>

            <span class=" mt-5"></span>
            <div class="card-body">
              <table class="table table-bordered">
                <thead>
                    <tr class="item-row">
                        <th>Item</th>
                        <th>Price</th>
                        <th>Quantity/Days</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                <!-- Here should be the item row -->
                <tr class="item-row">
                    <td>
                        <select name="item" class="form-control">
                            <option value="">Select Seat</option>    
                        @foreach ($seat as $item)
                            <option value="{{$item->id}}">{{$item->name}}</option>
                        @endforeach
                        </select></td>
                    <td><input class="form-control price" placeholder="Price" type="text"></td>
                    <td><input class="form-control qty" placeholder="Days" type="text"></td>
                    <td><span class="total">0.00</span></td>
                </tr>
                <tr id="hiderow">
                    <td colspan="4">
                        <a id="addRow" href="javascript:;" title="Add a row" class="btn btn-primary">Add a row</a>
                    </td>
                </tr>
                
                <tr>
                    <td></td>
                    <td></td>
                    <td class="text-right"><strong>Sub Total</strong></td>
                    <td><span id="subtotal">0.00</span></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td class="text-right"><strong>Discount</strong></td>
                    <td><input class="form-control" id="discount" value="0" type="text"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td class="text-right"><strong>Grand Total</strong></td>
                    <td><textarea style="background-color: transparent; width: 100%; color: #fff; height:37px; padding: 1px 3px" id="grandTotal" name="grand_total">0</textarea></td>
                </tr>
                </tbody>
                
            </table>
            <tfoot>
                <button type="submit" class="btn btn-primary my-4">Submit</button>
            </tfoot> 
            </div>
            </form>
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
</div>
@endsection


{{-- script --}}
@section('script')
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script>
        (function (jQuery) {
    $.opt = {};  // jQuery Object

    jQuery.fn.invoice = function (options) {
        var ops = jQuery.extend({}, jQuery.fn.invoice.defaults, options);
        $.opt = ops;

        var inv = new Invoice();
        inv.init();

        jQuery('body').on('click', function (e) {
            var cur = e.target.id || e.target.className;

            if (cur == $.opt.addRow.substring(1))
                inv.newRow();

            if (cur == $.opt.delete.substring(1))
                inv.deleteRow(e.target);

            inv.init();
        });

        jQuery('body').on('keyup', function (e) {
            inv.init();
        });

        return this;
    };
    }(jQuery));

    function Invoice() {
    self = this;
    }

    Invoice.prototype = {
    constructor: Invoice,

    init: function () {
        this.calcTotal();
        this.calcTotalQty();
        this.calcSubtotal();
        this.calcGrandTotal();
    },

    /**
     * Calculate total price of an item.
     *
     * @returns {number}
     */
    calcTotal: function () {
        jQuery($.opt.parentClass).each(function (i) {
            var row = jQuery(this);
            var total = row.find($.opt.price).val() * row.find($.opt.qty).val();

            total = self.roundNumber(total, 2);

            row.find($.opt.total).html(total);
        });

        return 1;
    },

    /***
     * Calculate total quantity of an order.
     *
     * @returns {number}
     */
    calcTotalQty: function () {
        var totalQty = 0;
        jQuery($.opt.qty).each(function (i) {
            var qty = jQuery(this).val();
            if (!isNaN(qty)) totalQty += Number(qty);
        });

        totalQty = self.roundNumber(totalQty, 2);

        jQuery($.opt.totalQty).html(totalQty);

        return 1;
    },

    /***
     * Calculate subtotal of an order.
     *
     * @returns {number}
     */
    calcSubtotal: function () {
        var subtotal = 0;
        jQuery($.opt.total).each(function (i) {
            var total = jQuery(this).html();
            if (!isNaN(total)) subtotal += Number(total);
        });

        subtotal = self.roundNumber(subtotal, 2);

        jQuery($.opt.subtotal).html(subtotal);

        return 1;
    },

    /**
     * Calculate grand total of an order.
     *
     * @returns {number}
     */
     calcGrandTotal: function () {
    var subtotal = Number(jQuery($.opt.subtotal).html());
    var discountPercentage = Number(jQuery($.opt.discount).val());
    
    // Calculate the discount amount
    var discountAmount = (subtotal * discountPercentage) / 100;

    // Calculate the grand total after applying the discount
    var grandTotal = subtotal - discountAmount;
    
    grandTotal = self.roundNumber(grandTotal, 2);
    
    jQuery($.opt.grandTotal).html(grandTotal);
    
    return 1;
},

    /**
     * Add a row.
     *
     * @returns {number}
     */
    newRow: function () {
        jQuery(".item-row:last").after('<tr class="item-row"><td class="item-name"><div class="delete-btn"><select name="item" class="form-control"><option value="">Select One</option>@foreach ($medicine as $item)<option value="{{$item->id}}">{{$item->name}}</option>@endforeach</select><a class=' + $.opt.delete.substring(1) + ' href="javascript:;" title="Remove row">X</a></div></td><td><input class="form-control price" placeholder="Price" type="text"> </td><td><input class="form-control qty" placeholder="Quantity" type="text"></td><td><span class="total">0.00</span></td></tr>');

        if (jQuery($.opt.delete).length > 0) {
            jQuery($.opt.delete).show();
        }

        return 1;
    },

    /**
     * Delete a row.
     *
     * @param elem   current element
     * @returns {number}
     */
    deleteRow: function (elem) {
        jQuery(elem).parents($.opt.parentClass).remove();

        if (jQuery($.opt.delete).length < 2) {
            jQuery($.opt.delete).hide();
        }

        return 1;
    },

    /**
     * Round a number.
     * Using: http://www.mediacollege.com/internet/javascript/number/round.html
     *
     * @param number
     * @param decimals
     * @returns {*}
     */
    roundNumber: function (number, decimals) {
        var newString;// The new rounded number
        decimals = Number(decimals);

        if (decimals < 1) {
            newString = (Math.round(number)).toString();
        } else {
            var numString = number.toString();

            if (numString.lastIndexOf(".") == -1) {// If there is no decimal point
                numString += ".";// give it one at the end
            }

            var cutoff = numString.lastIndexOf(".") + decimals;// The point at which to truncate the number
            var d1 = Number(numString.substring(cutoff, cutoff + 1));// The value of the last decimal place that we'll end up with
            var d2 = Number(numString.substring(cutoff + 1, cutoff + 2));// The next decimal, after the last one we want

            if (d2 >= 5) {// Do we need to round up at all? If not, the string will just be truncated
                if (d1 == 9 && cutoff > 0) {// If the last digit is 9, find a new cutoff point
                    while (cutoff > 0 && (d1 == 9 || isNaN(d1))) {
                        if (d1 != ".") {
                            cutoff -= 1;
                            d1 = Number(numString.substring(cutoff, cutoff + 1));
                        } else {
                            cutoff -= 1;
                        }
                    }
                }

                d1 += 1;
            }

            if (d1 == 10) {
                numString = numString.substring(0, numString.lastIndexOf("."));
                var roundedNum = Number(numString) + 1;
                newString = roundedNum.toString() + '.';
            } else {
                newString = numString.substring(0, cutoff) + d1.toString();
            }
        }

        if (newString.lastIndexOf(".") == -1) {// Do this again, to the new string
            newString += ".";
        }

        var decs = (newString.substring(newString.lastIndexOf(".") + 1)).length;

        for (var i = 0; i < decimals - decs; i++)
            newString += "0";
        //var newNumber = Number(newString);// make it a number if you like

        return newString; // Output the result to the form field (change for your purposes)
    }
    };

    /**
    *  Publicly accessible defaults.
    */
    jQuery.fn.invoice.defaults = {
    addRow: "#addRow",
    delete: ".delete",
    parentClass: ".item-row",

    price: ".price",
    qty: ".qty",
    total: ".total",
    totalQty: "#totalQty",

    subtotal: "#subtotal",
    discount: "#discount",
    shipping: "#shipping",
    grandTotal: "#grandTotal"
    };

    </script>
    <script>
        jQuery(document).ready(function(){
            jQuery().invoice({
                addRow : "#addRow",
                delete : ".delete",
                parentClass : ".item-row",

                price : ".price",
                qty : ".qty",
                total : ".total",
                totalQty: "#totalQty",

                subtotal : "#subtotal",
                discount: "#discount",
                shipping : "#shipping",
                grandTotal : "#grandTotal"
            });
        });
    </script>
@endsection