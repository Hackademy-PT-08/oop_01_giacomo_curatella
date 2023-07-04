<?php
//!classe dell'azienda
class Company {
    public $name;
    public $state;
    public $employees;
    public static $avg_wage = 1500;
    public static $totalExpense = 0;
    //!costruttore
    public function __construct($name, $state, $employees) {
        $this->name = $name;
        $this->state = $state;
        $this->employees = $employees;
    }
    //!dettagli della compagnia
    public function companyDetails(){
        echo "L'azienda $this->name con sede " . ($this->state == "Italia" ? "in " : "negli ") . $this->state . ($this->employees > 0 ? " ha in totale $this->employees dipendenti \n" : " Non ha dipendenti! \n");
    }
    //!spesa annuale dell'azienda per gli stipendi
    public function companyExpense(){
        echo "La spesa ANNUALE della compagnia $this->name in stipendi è di €" . (self::$avg_wage * $this->employees) * 12 . "\n";
        self::$totalExpense += (self::$avg_wage * $this->employees) * 12;
    }
    //!calcolo del totale assoluto di tutte le aziende messe insieme
    public static function totalCompaniesExpense(){
        echo "Il totale ASSOLUTO di tutte le aziende è di €" . self::$totalExpense . "\n";
    }
};
//!istanziamo le aziende (5)
$company1 = new Company("Enel", "Italia", "220");
$company2 = new Company("Eni", "Italia", "320");
$company3 = new Company("Generali", "Italia", "81");
$company4 = new Company("GSE", "Italia", "0");
$company5 = new Company("Facebook", "Stati Uniti", "570");
//!utilizziamo il metodo companyDetails per presentare le aziende
$company1->companyDetails();
$company2->companyDetails();
$company3->companyDetails();
$company4->companyDetails();
$company5->companyDetails();
//!spesa della singola compagnia ANNUALE
$company1->companyExpense();
$company2->companyExpense();
$company3->companyExpense();
$company4->companyExpense();
$company5->companyExpense();
//!calcoliamo il costo totale di tutte le compagnie
Company::totalCompaniesExpense();
?>