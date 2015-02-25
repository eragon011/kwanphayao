<?php

class ContentApiController extends \BaseController {

    public function __construct(ContentService $contentService) {
        $this->contentService = $contentService;
    }

    public function getIndex() {

        $with = ['category'];

        $colFilter = [
            "title",
        ];

        $relateColFilter = [
            'category' => [
                'name'
            ]
        ];

        return  $this->contentService->getPagination("Content",Input::all(),$colFilter,$relateColFilter,$with);

    }

    public function getView($id) {
        $content = $this->contentService->getById($id);
        return $content;
    }

    public  function getEdit($id) {
        return $this->getView($id);
    }

    public function postSave() {

        return $this->contentService->save(Input::all());
    }

    public function postDelete() {
        return $this->contentService->delete(Input::all());

    }





    // specific content data loader


}