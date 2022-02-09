<?php


namespace App\classes;


class Word
{

    protected $inputvalue;
    protected $result;
    protected $type;
    public function __construct($post=null)
    {
//        echo '<pre/>';
//        print_r($post);
//        exit();
        if ($post)
        {
            $this->inputvalue = $post['input_value'];
            $this->type = $post['type'];
        }

    }

    public function index()
    {
//        if ($this->type == 'word'){
//        $this->result = str_word_count($this->inputvalue);
//        }
//        else{
//
//        $this->result= strlen($this->inputvalue);
//        }
        $this->result=[
            'givenWord'=>'given word' . $this->inputvalue,
            'wordCount'=>' total word' .str_word_count($this->inputvalue),
            'characterCount' =>'total character' .strlen($this->inputvalue),
        ];
        return $this->result;
    }
}