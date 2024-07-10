<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{  __('INVOICE') }}</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta charset="UTF-8">
    <style media="all">

        @page {
            margin: 0;
            padding:0;
        }
        body,th,td{
            font-size: 0.875rem;
            font-family: 'cairo';
            font-weight: normal;
            direction: rtl;
            text-align: right;
            padding:0;
            margin:0;
        }
        .gry-color *,
        .gry-color{
            color:#000;
            padding: 5px;
            border-color: transparent;
        }
        table{
            width: 100%;
        }
        table th{
            font-weight: normal;
        }
        table.padding th{
            padding: .25rem .7rem;
        }
        table.padding td{
            padding: .25rem .7rem;
        }
        table.sm-padding td{
            padding: .1rem .7rem;
        }
        .border-bottom td,
        .border-bottom th{
            border-bottom:1px solid #eceff4;
        }
        th td,tr td,table,tr{
            border: 0;
        }
        .text-left{
            text-align:right;
        }
        .text-right{
            text-align:left;
        }
        @page {
            header: page-header;
            footer: page-footer;
        }
    </style>
</head>
<body>
<div>

    <div>
        <table class="text-right sm-padding small strong">
            <thead>
            <tr>
                <th width="67%"></th>
                <th width="33%"></th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td class="text-left">
                    <img src="{{asset("assets/Sala/bill.png")}}" height="50" alt="">
                </td>
                <td>
                    <table class="text-left sm-padding small strong">
                        <tbody>
                        <tr>
                            <th class="gry-color text-left"> <span style="color: #19a09c">رقم الطـلب : </span>1$2A5#DS</th>
                        </tr>
                        <tr>
                            <th class="gry-color text-left" > <span style="color: #19a09c">تاريخ الطلب : </span>{{  today() }}</th>
                        </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            </tbody>
        </table>
    </div>

    <div style="padding: 1rem;padding-bottom: 0">
        <table class="text-right sm-padding small strong" style="background: #19a09c;padding: 15px">
            <thead>
            <tr>
                <th width="85%"></th>
                <th width="15%"></th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td class="text-left">
                    <table>
                        <tr><td class="gry-color small" style="font-size: 18px;color: #fff"><span style="font-weight: normal;font-size: 24px;">جهينة </span>, سوهاج - شارع عمر بن عبد العزيز</td></tr>
                        <tr><td class="strong" style="color: #fff;font-size: 18px">+201117835451 - 09667</td></tr>

                        <tr><td class="strong" style="color: #fff;font-size: 18px">السيد /
                                أحمد حجازي
                            </td></tr>

                    </table>

                </td>
                <td style="border: 5px solid #fff;background: #fff">
                    {{--   @php
                           $removedXML = '<?xml version="1.0" encoding="UTF-8"?>';
                       @endphp
                       <div  >
                           {!! str_replace($removedXML,"", QrCode::size(120)->generate($order->code)) !!}
                       </div>--}}
                </td>
            </tr>
            </tbody>
        </table>
    </div>

    <div style="padding: 1rem;">
        <table class="padding text-left small border-bottom" style="border: 0 !important;">
            <thead>

            </thead>
            <tbody class="strong" style="border-color:#999999 !important;">
            <tr class="gry-color" style="background: #999999;border-color:#999999 !important;padding: 15px !important;height: 45px;margin: 10px">
                <td class="text-left" style="color: #fff;padding: 5px;border-color:#999999  !important;margin:  5px">ت</td>
                <td class="text-left" style="color: #fff;padding: 5px;border-color:#999999  !important;margin:  5px"></td>
                <td class="text-left" style="color: #fff;padding: 5px;border-right-color:#999999  !important;margin:  5px">التفاصيل</td>
                <td class="text-left" style="color: #fff;padding: 5px;border-left-color:#999999  !important;margin:  5px">العدد</td>
                <td class="text-left" style="color: #fff;padding: 5px;border-right-color:#999999  !important;margin:  5px">السعر</td>
                <td class="text-left" style="color: #fff;padding: 5px;border-left-color:#999999  !important;margin:  5px">المجموع</td>
            </tr>

            <tr class="">
                <td>
                    1
                </td>
                <td>
                    <img height="75" style="border: 1px solid #ddd;padding: 10px" src="{{asset("assets/Sala/bell.png")}}">
                </td>
                <td>
                    منتج 1

                    <br>
                </td>

                <td class=""><div style="width: 40px !important;padding:15px;height: 40px;color: #0c5460;border: 1px solid #ddd;border-radius: 50%;font-size: 19px;font-weight: normal">
                        75
                    </div></td>
                <td class="currency">{{number_format(10000)}}
                </td>
                <td class="text-right currency">
                    <small style="color: #0c5460">20 X {{ number_format(10000) }}</small><br>{{ number_format(10000*20)}}</td>
            </tr>
            </tbody>
        </table>
    </div>

    <div style="padding: 1.5rem;">
        <table class="text-right sm-padding small strong">
            <thead>
            <tr>
                <th width="50%"></th>
                <th width="50%"></th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td class="text-left">

                </td>
                <td>
                    <table class="text-right sm-padding small strong">
                        <tbody>
                        <tr>
                            <th class="gry-color text-left">المبلغ الكلي للمنتجات</th>
                            <td class="currency">{{number_format(10000 *20 +10000 *30)}}</td>
                        </tr>

                        <tr class="border-bottom">
                            <th class="gry-color text-left">{{ __('Total Tax') }}</th>
                            <td class="currency">{{25 }}</td>
                        </tr>
                        <tr class="border-bottom">
                            <th class="gry-color text-left"  style="color: #a80101">الخصم</th>
                            <td class="currency" style="color: #a80101">{{0.00}}</td>
                        </tr>
                        <tr>
                            <th class="gry-color text-left">كلفة التوصيل</th>
                            <td class="currency">{{ 75}}</td>
                        </tr>
                        <tr>
                            <th class="text-left strong" style="font-weight: normal;color: #19a09c">المبلغ المطلوب للدفع </th>
                            <td class="currency" style="font-family: 'cairo';color: #19a09c">{{number_format(10000 *20 +10000 *30+100 )}}</td>
                        </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
    <div>
        <table class="text-right sm-padding small strong">
            <thead>
            <tr>
                <th width="2%"></th>
                <th width="48%"></th>
                <th width="2%"></th>
                <th width="48%"></th>
                <th width="2%"></th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td width=""></td>
                <td class="text-left border-bottom" style="color: #19a09c;font-size: 18px;font-weight: normal;border-bottom: 1px solid #ddd">
                    توقيع الزبون
                </td>
                <td width=""></td>
                <td class="text-left " style="color: #19a09c;font-size: 18px;font-weight: normal;border-bottom: 1px solid #ddd">
                    ملاحظات التاجر

                </td>
                <td width=""></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td class="text-left">
                         <span style="font-size: 15px;color: #333">
                            {{"لا يوجد "}}
                        </span>
                </td>
                <td></td>
            </tr>

            </tbody>
        </table>
    </div>
</div>
<htmlpagefooter name="page-footer" >
    <img src="{{asset("assets/Sala/footer.png")}}" style="width: 100%" alt="">
</htmlpagefooter>

</body>
</html>
