<?php


namespace  University\Assessment;
use \University\Assessment\Exam;


class Controller
{
    public function execute($request,$response)
    {
        //echo $request->id;
        $exam = new Exam();
        try {

            $exam->getPersistence()->load($request->id);
            return print_r($exam, true);

        } catch (NotFoundException $e) {
            \University\Services\Logger::getLogger()->debug(
                $e->getMessage(), $e->getTrace());

            return "Sorry, the exam not found";

        }catch (\Exception $e) {
            \University\Services\Logger::getLogger()->debug(
                $e->getMessage(), $e->getTrace());
            return "Fatal error!";

        }
    }
}