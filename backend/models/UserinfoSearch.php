<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Userinfo;

/**
 * UserinfoSearch represents the model behind the search form about `app\models\Userinfo`.
 */
class UserinfoSearch extends Userinfo
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'usertype', 'iphone', 'sex'], 'integer'],
            [['username', 'password', 'name', 'e_mail', 'creattime', 'login_time', 'login_ip'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Userinfo::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'usertype' => $this->usertype,
            'iphone' => $this->iphone,
            'sex' => $this->sex,
            'creattime' => $this->creattime,
            'login_time' => $this->login_time,
        ]);

        $query->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like', 'password', $this->password])
            ->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'e_mail', $this->e_mail])
            ->andFilterWhere(['like', 'login_ip', $this->login_ip]);

        return $dataProvider;
    }
}
