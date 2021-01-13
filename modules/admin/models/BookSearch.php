<?php
namespace app\modules\admin\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Book;

class BookSearch extends Book
{
    
    
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['IdBookRoom', 'Room','GroupSize','IdMainClient'], 'integer'],
            [['StatusCode'], 'safe'],
            [['ArrivalDate','DepartDate'],'date']
        ];
    }
    
    /**
     * {@inheritdoc}
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
        $query = Book::find()->with('client');
        
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
            'IdBookRoom' => $this->IdBookRoom,
            'IdMainClient' => $this->IdMainClient,
        ]);
//         $query->andFilterWhere([
//             'Surname' => $this->client::Surname,
//             'Name' => $this->client::Name,
//         ]);
        $query->andFilterWhere(['like', 'GroupSize', $this->GroupSize])->andFilterWhere(['like', 'Room', $this->Room])->andFilterWhere(['between', 'ArrivalDate', $this->ArrivalDate,'DepartDate', $this->DepartDate])
        ->andFilterWhere(['like', 'StatusCode', $this->StatusCode]);
        
        return $dataProvider;
    }
    
}

