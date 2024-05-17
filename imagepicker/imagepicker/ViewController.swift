//
//  ViewController.swift
//  imagepicker
//
//  Created by student on 21/02/24.
//

import UIKit

class ViewController: UIViewController,UIImagePickerControllerDelegate,UINavigationControllerDelegate {
    
    
    @IBAction func mybutton(_ sender: UIButton) {
        
        let imagecontroller = UIImagePickerController()
        
        imagecontroller.delegate = self
        imagecontroller.sourceType = UIImagePickerController.SourceType.photoLibrary
        self.present(imagecontroller, animated: true, completion: nil)
        
    }
    
    
    @IBOutlet var myimage: UIImageView!
    
    override func viewDidLoad() {
        super.viewDidLoad()
        
    }


}

