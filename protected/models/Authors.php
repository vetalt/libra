<?php

/**
 * This is the model class for table "authors".
 *
 * The followings are the available columns in table 'authors':
 * @property string $id
 * @property string $name
 * @property string $birth
 * @property string $death
 * @property string $country
 * @property string $biography
 */
class Authors extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'authors';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('name', 'required'),
            array('name, country', 'length', 'max' => 255),
            array('birth, death', 'length', 'max' => 4),
            array('biography', 'safe'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, name, birth, death, country, biography', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'books' => array(self::HAS_MANY, 'Books', 'author_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'name' => 'Name',
            'birth' => 'Birth year',
            'death' => 'Death year',
            'country' => 'Country',
            'biography' => 'Biography',
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     *
     * Typical usecase:
     * - Initialize the model fields with values from filter form.
     * - Execute this method to get CActiveDataProvider instance which will filter
     * models according to data in model fields.
     * - Pass data provider to CGridView, CListView or any similar widget.
     *
     * @return CActiveDataProvider the data provider that can return the models
     * based on the search/filter conditions.
     */
    public function search() {
        // @todo Please modify the following code to remove attributes that should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id, true);
        $criteria->compare('name', $this->name, true);
        $criteria->compare('birth', $this->birth, true);
        $criteria->compare('death', $this->death, true);
        $criteria->compare('country', $this->country, true);
        $criteria->compare('biography', $this->biography, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Authors the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public static function getNames() {
        $models = self::model()->findAll();
        foreach ($models as $model) {
            $names[$model->id] = $model->name;
        }
        return $names;
    }

}
