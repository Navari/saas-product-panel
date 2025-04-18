<?php

namespace App\Console\Commands;

use App\XML\Models\IdeaSoft;
use Illuminate\Console\Command;

class XMLResponse extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:x-m-l-response';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $xml = '<?xml version="1.0" encoding="UTF-8"?>
<root>
 <item>
  <stockCode><![CDATA[ACMNSWX2]]></stockCode>
  <label><![CDATA[Kahve Deri Düz Ayakkabı]]></label>
  <status>1</status>
  <brand><![CDATA[Brion]]></brand>
  <brandId>10296</brandId>
  <barcode><![CDATA[Brion]]></barcode>
  <mainCategory><![CDATA[Ayakkabı]]></mainCategory>
  <category><![CDATA[Bayan Ayakkabı]]></category>
  <subCategory><![CDATA[Babet]]></subCategory>
  <buyingPrice>0.000</buyingPrice>
  <price1>143.220</price1>
  <price2>0.000</price2>
  <price3>0.000</price3>
  <price4>0.000</price4>
  <price5>0.000</price5>
  <tax>18</tax>
  <currencyAbbr>TL</currencyAbbr>
  <stockAmount>1</stockAmount>
  <stockType><![CDATA[Adet]]></stockType>
  <warranty>24</warranty>
  <picture1Path><![CDATA[http://siteadi.com/modules/catalog/products/pr_01_158148_max.jpg?rev=1453707778]]></picture1Path>
  <picture2Path><![CDATA[http://siteadi.com/modules/catalog/products/pr_02_158148_max.jpg?rev=1453707778]]></picture2Path>
  <picture3Path><![CDATA[http://siteadi.com/modules/catalog/products/pr_03_158148_max.jpg?rev=1453707778]]></picture3Path>
  <picture4Path><![CDATA[http://siteadi.com/modules/catalog/products/pr_04_158148_max.jpg?rev=1453707778]]></picture4Path>
  <dm3>0.0000</dm3>
  <details><![CDATA[<div>Marka <span class="Apple-tab-span" style="white-space:pre"></span>: <span class="Apple-tab-span" style="white-space:pre"></span>Be Live</div>
<div>Materyal<span class="Apple-tab-span" style="white-space:pre"></span>:<span class="Apple-tab-span" style="white-space:pre"></span>Deri</div>
<div>Taban<span class="Apple-tab-span" style="white-space:pre"></span>:<span class="Apple-tab-span" style="white-space:pre"></span>Termo Hazır Taban</div><br />]]></details>
  <rebate>10.00000</rebate>
  <rebateType>1</rebateType>
  <variants>
   <variant>
    <vStockCode><![CDATA[ACMNSWX2_47f080]]></vStockCode>
    <vBarcode></vBarcode>
    <vStockAmount>1</vStockAmount>
    <vBuyingPrice>0.000</vBuyingPrice>
    <vPrice1>143.220</vPrice1>
    <vPrice2>0.000</vPrice2>
    <vPrice3>0.000</vPrice3>
    <vPrice4>0.000</vPrice4>
    <vPrice5>0.000</vPrice5>
    <vRebate>10.00000</vRebate>
    <vRebateType>1</vRebateType>
    <vDm3>0.8000</vDm3>
    <options>
     <option>
      <variantName><![CDATA[Renk]]></variantName>
      <variantValue><![CDATA[Gümüş]]></variantValue>
     </option>
    </options>
   </variant>
   </variants>
  <specs>
   <spec>
    <specGroup><![CDATA[Cinsiyet]]></specGroup>
    <specName><![CDATA[Cinsiyet]]></specName>
    <specValue><![CDATA[Bayan]]></specValue>
   </spec>
  </specs>
 </item>
</root>';
        $xml = simplexml_load_string($xml, 'SimpleXMLElement', LIBXML_NOCDATA);
        $json = json_encode($xml);
        $array = json_decode($json,TRUE);
        foreach($array as $item){
            $ideaSoft = new IdeaSoft();
            $response[] = $ideaSoft->fromArray($item);
        }
    }
}
