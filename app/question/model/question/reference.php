<?php
/**
 *
 */
class question_model_question_reference extends core_model_db
{
    /**
     * Gets table name.
     */
    public function table()
    {
        return 'question_reference';
    }

    /**
     * Gets id column name.
     */
    public function primary()
    {
        return 'id';
    }

    public function save()
    {
        if (!$this->get('id')) {
            $this->remove('id');
        }
        parent::save();
    }
}
