<?php

class BlogPost
{
    public $id;
    public $date;
    public $title;
    public $text;
    public $author;
    public $comment;

    /**
     * @param $id
     * @param $date
     * @param $title
     * @param $text
     * @param $author
     * @param $comment
     */
    public function __construct($id=null, $date=null, $title=null, $text=null, $author=null, $comment=null)
    {
        if (!empty($inId)) {
            $this->id = $id;
        }
        if (!empty($inId)) {
            $this->date = $date;
        }
        if (!empty($inId)) {
            $this->title = $title;
        }
        if (!empty($inId)) {
            $this->text = $text;
        }
        if (!empty($inId)) {
            $this->author = $author;
        }
        if (!empty($inId)) {
            $this->comment = $comment;
        }
    }


}