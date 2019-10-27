<?php
 class StudentMaker{
    private  $itStudnet;
    private $artStudnet;
    private $eduStudnet;
    private $engStudnet;
    protected $aMaker;

 public static function __construct(){
        $student = new StudentMaker(); 
        $student->itStudent = new ItStudent();
        $student->artStudentnew =new ArtStudent();
        $student->engStudent =new EngStudent();
        $student->EdeStudent = new EdeStudent();
        return $student;
    }

    public static function getaMaker() {
        if(student::$aMaker == NULL){
           $aMaker = new StudentMaker;
        }
        return student::$aMaker;
    }
    public function viewIT(){
        $this->itStudnet->view();
    }
    public function  viewART(){
         $this->artStudnet->view();
    }
    public function  viewEng(){
         $this->engStudnet->view();
    }
    public function  viewEdu(){
         $this->eduStudnet->view();
    }
}
?>