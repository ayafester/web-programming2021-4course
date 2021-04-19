<?
    require_once("Classes/PHPExcel.php")
    include "connect.php";

    $titles = [
        ["name"=>"id", "cell"=>"A"],
        ["name"=>"Name", "cell"=>"B"],
        ["name"=>"Description", "cell"=>"C"],
    ];

    $objExcel = new PHPExcel(); // Создание объекта класса PHPExcel
    $objExcel->setActiveSheetIndex(0); // Создаем новый лист в excel файле

    $activeSheet = $objExcel->getActiveSheet();
    $activeSheet->setTitle("База данных");

    for($i = 0; $i < count($titles); $i++)
    {
        $nameTitle = $titles[$i]["name"];
        $cellLetter = $titles[$i]["cell"] . 2;
        $activeSheet->setCellValue($cellLetter, $nameTitle);
    }

    $i = 3;

    // Горизонтальное и вертикальное выравнивание по центру
    $style = [
        "alignment"=>["horizontal" => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
                        "vertical" => PHPExcel_Style_Alignment::VERTICAL_CENTER]
    ];

    $activeSheet->getStyle("A2:C2")->applyFromArray($style); // Выравнивание по центру для A2:C2
    $activeSheet->getColumnDimension("A")->setWidth(10); // Устанавиливаем ширину в 10 ед. для колонки А
    $activeSheet->getColumnDimension("B")->setWidth(15); // Устанавиливаем ширину в 15 ед. для колонки B
    $activeSheet->getColumnDimension("C")->setWidth(30); // Устанавиливаем ширину в 30 ед. для колонки C

    $select_all_data_from_chat = mysqli_query($link, "SELECT * FROM new");


    while($data_from_db = mysql_fetch_array($select_all_data_from_chat))
    {
        $activeSheet->setCellValue("A{$i}", $data_from_db["id"]);
        $activeSheet->setCellValue("B{$i}", $data_from_db["name"]);
        $activeSheet->setCellValue("C{$i}", $data_from_db["description"]);

        $activeSheet->getStyle("B{$i}")->getAlignment()->setWrapText(true); // Устанавливаем автоперенос строки для ячейки B{$i}
        $activeSheet->getStyle("C{$i}")->getAlignment()->setWrapText(true); // Устанавливаем автоперенос строки для ячейки C{$i}
        $activeSheet->getStyle("A{$i}:C{$i}")->applyFromArray($style); // Выравнивание по центру для Ai:Ci

        $i++;
    }

    $objWriter = new PHPExcel_Writer_Excel5($objExcel);
    header ("Content-type: application/vnd.ms-excel"); //Говорим браузеру, что мы будем выводить excell файл
    header('Content-Disposition: attachment; filename="users.xls"'); // Он будет называться users.xls

    $objWriter->save('php://output'); // Это сохранит файл в браузере

?>
