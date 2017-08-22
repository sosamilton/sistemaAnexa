<?php

namespace Anexa\CooperadoraBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Anexa\CooperadoraBundle\Entity\Configuracion;
use Anexa\CooperadoraBundle\Form\ConfiguracionType;
use Symfony\Component\HttpFoundation\Response;

class BackendController extends Controller
{
    public function indexAction()
    {
        return $this->render('AnexaCooperadoraBundle:importar:index.html.twig', array('menu' => 'inicio' ));
    }

    public function importDataAction()
    {
        return $this->render('AnexaCooperadoraBundle:backend:index.html.twig', array('menu' => 'importData' ));
    }

    public function loadDataAction(Request $request){
      $filenames = "your-file-name";
      $file = $request->files->get('fichierExcel');
      $phpExcelObject = $this->get('phpexcel')->createPHPExcelObject($filenames);

      foreach ($phpExcelObject ->getWorksheetIterator() as $worksheet) {
         echo 'Worksheet - ' , $worksheet->getTitle();
         foreach ($worksheet->getRowIterator() as $row) {
             echo '    Row number - ' , $row->getRowIndex();
             $cellIterator = $row->getCellIterator();
             $cellIterator->setIterateOnlyExistingCells(false); // Loop all cells, even if it is not set
             foreach ($cellIterator as $cell) {
                 if (!is_null($cell)) {
                     echo '        Cell - ' , $cell->getCoordinate() , ' - ' , $cell->getCalculatedValue();
                 }
             }
        }
      }
      // $objPHPExcel = $this->get('xls.load_xls2007')->load($fileWithPath);
      // //se obtienen las hojas, el nombre de las hojas y se pone activa la primera hoja
      // $total_sheets=$objPHPExcel->getSheetCount();
      // $allSheetName=$objPHPExcel->getSheetNames();
      // $objWorksheet = $objPHPExcel->setActiveSheetIndex(0);
      // //Se obtiene el número máximo de filas
      // $highestRow = $objWorksheet->getHighestRow();
      // //Se obtiene el número máximo de columnas
      // $highestColumn = $objWorksheet->getHighestColumn();
      // $highestColumnIndex = PHPExcel_Cell::columnIndexFromString($highestColumn);
      // //$headingsArray contiene las cabeceras de la hoja excel. Llos titulos de columnas
      // $headingsArray = $objWorksheet->rangeToArray('A1:'.$highestColumn.'1',null, true, true, true);
      // $headingsArray = $headingsArray[1];
      //
      // //Se recorre toda la hoja excel desde la fila 2 y se almacenan los datos
      //  $r = -1;
      //  $namedDataArray = array();
      //  for ($row = 2; $row <= $highestRow; ++$row) {
      //       $dataRow = $objWorksheet->rangeToArray('A'.$row.':'.$highestColumn.$row,null, true, true, true);
      //       if ((isset($dataRow[$row]['A'])) && ($dataRow[$row]['A'] > '')) {
      //             ++$r;
      //             foreach($headingsArray as $columnKey => $columnHeading) {
      //                     $namedDataArray[$r][$columnHeading] = $dataRow[$row][$columnKey];
      //             } //endforeach
      //       } //endif
      //   }
      //  var_dump($namedDataArray);
    }
}
