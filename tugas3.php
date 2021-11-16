<?php 

/**
 * @param Int fch Full Charge Capacity
 * @param Int dc Desain Capacity
 */
class BatteryHealth {
    
    protected  $fullChargeCapacity;
    protected  $desainCappacity;
    
    public function __construct($fch, $dc) {
        $this->fullChargeCapacity   = $fch;
        $this->desainCapacity       = $dc;
    }
}

class BatteryHealthCheck extends BatteryHealth {

    private function count() {
        return round(($this->fullChargeCapacity / $this->desainCapacity) * 100);
    }

    public function checkHealth() {
        $count = $this->count();
        
        if ($count > 60) {
            return "Kesehatan baterai laptop anda sudah baik!. Nilai Battery Health : " . $count . "%";
        } else {
            return "Kesehatan baterai anda sudah tidak baik, disarankan untuk mengganti baterai laptop! Nilai Battery Health : " . $count . "%";
        }
    }

    public function __destruct() {

        echo "
            Keterangan Kesehatan Baterai (Battery Health Check) <br>
            Full Charge Capacity : {$this->fullChargeCapacity} <br>
            Desain Capacity     : {$this->desainCapacity} <br>
            Hasil pengecekan    : {$this->checkHealth()} <br>
        ";

    }

}

$batteryHealth = new BatteryHealthCheck(27.5, 34.5);
$batteryHealth->checkHealth();