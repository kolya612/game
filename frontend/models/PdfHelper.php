<?php

namespace frontend\models;


use kartik\mpdf\Pdf;
use yii\helpers\Url;

class PdfHelper
{
    public static function getHeader($title){
        return '
                <div class="header-pdf">
                    <div class="cont">
                        <table width="100%">
                            <tr>
                                <td style="width: 30%;">
                                    Pay limitlessx
                                </td>
                                <td style="width: 70%;" rowspan="2" class="header-pdf-name">
                                   '.$title.'
                                   <table border="0"><tr><td class="header-pdf-hr"></td></tr></table>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            ';
    }

    public static function getFooter()
    {
        return '
                <div class="footer-content">
                    <div class="cont">
                        <table width="100%">
                            <tr>
                                <td class="copyyr" width="45%">
                                    COPYRIGHT © 2020. ALL RIGHTS RESERVED.
                                </td>
                                <td align="center" width="10%">
                                </td>
                                <td class="texte" width="45%">
                                    https://pay.limitlessx.com/
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            ';
    }

    public static function generate($content, $title, $filename, $destination, $css='',$margins=0){
        $pdf = new Pdf([
            // set to use core fonts only
            'mode' => '',//Pdf::MODE_CORE,
            // A4 paper format
            'format' => Pdf::FORMAT_A4,
            // portrait orientation
            'orientation' => Pdf::ORIENT_PORTRAIT,
            // stream to browser inline
            'destination' => $destination?$destination:Pdf::DEST_DOWNLOAD,
            // your html content input
            'content' => $content,
            // format content from your own css file if needed or use the
            // enhanced bootstrap css built by Krajee for mPDF formatting
//            'cssFile' => $_SERVER['DOCUMENT_ROOT'].'/images/pdf.css',
            // any css to be embedded if required
            'cssInline' => $css?$css:'
                *{font-family: Arial; font-size:12px; }
                  .ra_1{
                     text-align: center;
                     font-size: 55px;
                     text-transform: uppercase;
                     font-style: italic;
                    color: #142b4f;
                    margin-bottom: 20px;
                 }
                .ra_2{
                    text-align: center;
                    font-size: 22px;
                    text-transform: uppercase;
                    color: #899fbd;
                }
                .ra_3{
                    background-color: #899fbd;
                    color: white!important;
                    border: none;
                }
                .ra_3 tr td{
                    color: white!important;
                }
                .sub-title{
                    color: #142b4f;
                    text-align: center;
                    border: none!important;
                    font-style: italic;
                    font-size: 30px;
                }
                table:nth-child(2n){
                    background-color: #e7ebf1!important;
                }
                table tr td{
                    color:  color: #142b4f;
                    line-height: 45px;
                    height: 45px;
                }
                .total-title{
                    color: #142b4f;
                }
                .first{
                    padding-left:15px;
                }
            ',
            // set mPDF properties on the fly
            'options' => [
                'title' => $title,
                'defaultheaderline'=>0
            ],
            // call mPDF methods on the fly
//            'methods' => [
//                'SetHeader'=>self::getHeader($title),
//                'SetFooter'=>self::getFooter(),
//            ],
            'marginHeader'=>0,
            'marginFooter'=>0,
            'marginLeft'=>$margins?$margins:0,
            'marginRight'=>$margins?$margins:0,
            'marginTop'=>$margins?$margins:0,
            'marginBottom'=>$margins?$margins:0,
            'filename'=>$filename
        ]);

        return $pdf->render();
    }

    public static function generateWithHeaders($content, $title, $filename, $destination){
        $pdf = new Pdf([
            // set to use core fonts only
            'mode' => '',//Pdf::MODE_CORE,
            // A4 paper format
            'format' => Pdf::FORMAT_A4,
            // portrait orientation
            'orientation' => Pdf::ORIENT_PORTRAIT,
            // stream to browser inline
            'destination' => $destination?$destination:Pdf::DEST_DOWNLOAD,
            // your html content input
            'content' => $content,
            // format content from your own css file if needed or use the
            // enhanced bootstrap css built by Krajee for mPDF formatting
//            'cssFile' => $_SERVER['DOCUMENT_ROOT'].'/images/pdf.css',
            // any css to be embedded if required
            'cssInline' => '
                *{font-family: Arial; font-size:12px; }
                  .ra_1{
                     text-align: center;
                     font-size: 55px;
                     text-transform: uppercase;
                     font-style: italic;
                    color: #142b4f;
                    margin-bottom: 20px;
                 }
                .ra_2{
                    text-align: center;
                    font-size: 22px;
                    text-transform: uppercase;
                    color: #899fbd;
                }
                .ra_3{
                    background-color: #899fbd;
                    color: white!important;
                    border: none;
                }
                .ra_3 tr td{
                    color: white!important;
                }
                .sub-title{
                    color: #142b4f;
                    text-align: center;
                    border: none!important;
                    font-style: italic;
                    font-size: 30px;
                }
                table:nth-child(2n){
                    background-color: #e7ebf1!important;
                }
                table tr td{
                    color:  color: #142b4f;
                    line-height: 45px;
                    height: 45px;
                }
                .total-title{
                    color: #142b4f;
                }
                .first{
                    padding-left:15px;
                }
            ',
            // set mPDF properties on the fly
            'options' => [
                'title' => 'Report',
                'defaultheaderline'=>0
            ],
            // call mPDF methods on the fly
            'methods' => [
//                'SetHeader'=>self::getHeader($title),
//                'SetFooter'=>self::getFooter(),
            ],
            'marginHeader'=>20,
            'marginFooter'=>20,
            'marginLeft'=>5,
            'marginRight'=>5,
            'marginTop'=>20,
            'marginBottom'=>20,
            'filename'=>$filename
        ]);

        return $pdf->render();
    }
}