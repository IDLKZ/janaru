<?php

namespace App\Exports;


use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithProperties;

class UsersExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $users = User::all();
        $data = [];
        $i = 0;
        if ($users->isNotEmpty()){
            foreach ($users as $user){
                if ($i == 0){
                    $data[$i]["role"] = "Роль";
                    $data[$i]["name"] = "Имя";
                    $data[$i]["surname"] = "Фамилия";
                    $data[$i]["middlename"] = "Отчество";
                    $data[$i]["email"] = "Почта";
                    $data[$i]["phone"] = "Телефон";
                    $data[$i]["city"] = "Город/Регион";
                    $data[$i]["work"] = "Работа/Учеба";
                    $data[$i]["birthday"] = "Дата рождения";
                    $data[$i]["status"] = "Статус аккаунта";
                    $data[$i]["created_at"] = "Дата создания";
                }
                else{
                    $data[$i]["role"] = $user->is_admin == 1 ? "Админ" : "Пользователь";
                    $data[$i]["name"] = $user->name;
                    $data[$i]["surname"] = $user->surname;
                    $data[$i]["middlename"] = $user->middlename;
                    $data[$i]["email"] = $user->email;
                    $data[$i]["phone"] = $user->phone;
                    $data[$i]["city"] = $user->city;
                    $data[$i]["work"] = $user->work;
                    $data[$i]["birthday"] = $user->birthday;
                    $data[$i]["status"] = $user->email_verified == 1 ? "Верифицирован" : "Не верифицирован";
                    $data[$i]["created_at"] = $user->created_at->format('d/m/Y h:i:s');
                }
                $i++;

            }
        }

        return collect($data);

    }




}
