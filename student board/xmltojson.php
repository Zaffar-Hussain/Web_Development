<?php

			class XmlToJson {
				$url='student_det.xml';

				public function Parse ($url) {

					$fileContents= file_get_contents($url);

					$fileContents = str_replace(array("\n", "\r", "\t"), '', $fileContents);

					$fileContents = trim(str_replace('"', "'", $fileContents));

					$simpleXml = simplexml_load_string($fileContents);

					$json = json_encode($simpleXml);

					return $json;

				}

			}   
?>