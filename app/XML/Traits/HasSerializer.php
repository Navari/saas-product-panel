<?php

namespace App\XML\Traits;

use Illuminate\Support\Facades\Log;

trait HasSerializer
{
    public function fromArray(array $data = []): self
    {
        foreach ($data as $key => $value) {
            $function = 'set' . ucfirst($key);
            if (method_exists($this, $function)){
                $this->{$function}($value);
            }else{
                Log::info('Method ' . $function . ' does not exist in ' . get_class($this));
            }
        }
        return $this;
    }

    public function fromXml(string $xml): self
    {
        $xml = simplexml_load_string($xml);
        $json = json_encode($xml);
        $array = json_decode($json, true);
        return $this;
    }
}
