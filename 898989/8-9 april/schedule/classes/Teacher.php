<?php


class Teacher extends Table
{
    public $user_id=0;
    public $otdel_id=0;
    public function validate()
    {
        if (!empty($this->otdel_id)) {
            return true;
        }
        return false;
        //return false;
    }
}