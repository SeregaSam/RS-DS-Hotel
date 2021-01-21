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
            [['StatusCode','FoodType','client.Surname','client.Name','client.Patronymic'], 'safe'],
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
        $query->joinWith(['client' => function($query) { $query->from(['client' => 'client']); }]);
        // grid filtering conditions
        $dataProvider->sort->attributes['client.Surname'] = [
            'asc' => ['client.Surname' => SORT_ASC],
            'desc' => ['client.Surname' => SORT_DESC],
        ];
        $dataProvider->sort->attributes['client.Name'] = [
            'asc' => ['client.Name' => SORT_ASC],
            'desc' => ['client.Name' => SORT_DESC],
        ];
        $dataProvider->sort->attributes['client.Patronymic'] = [
            'asc' => ['client.Patronymic' => SORT_ASC],
            'desc' => ['client.Patronymic' => SORT_DESC],
        ];
        
        //         $query->andFilterWhere([
        //             'Surname' => $this->client::Surname,
        //             'Name' => $this->client::Name,
        //         ]);
        $query->andFilterWhere(['like', 'GroupSize', $this->GroupSize])->andFilterWhere(['FoodType'=>$this->FoodType])->andFilterWhere(['between', 'ArrivalDate', $this->ArrivalDate,'DepartDate', $this->DepartDate])
        ->andFilterWhere(['like', 'StatusCode', $this->StatusCode]);
        $query->andFilterWhere(['LIKE', 'client.Surname', $this->getAttribute('client.Surname')])->andFilterWhere(['LIKE', 'client.Name', $this->getAttribute('client.Name')])
        ->andFilterWhere(['client.Patronymic'=> $this->getAttribute('client.Patronymic')]);
        
        return $dataProvider;
        
    }
    public function attributes()
    {
        // делаем поле зависимости доступным для поиска
        return array_merge(parent::attributes(), ['client.Surname','client.Name','client.Patronymic']);
    }
    
}
