<?php

namespace Core\Controller;

interface ControllerResolverInterface {
    
    public static getController(Request $request);
    public static loadController(Request $request);
}