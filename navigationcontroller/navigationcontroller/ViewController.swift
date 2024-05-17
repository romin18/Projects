//
//  ViewController.swift
//  navigationcontroller
//
//  Created by student on 24/01/24.
//

import UIKit

class ViewController: UIViewController {

    @IBOutlet var myimage: UIImageView!
    override func viewDidLoad() {
        super.viewDidLoad()
        // Do any additional setup after loading the view.
    }


    @IBAction func gotosecond(_ sender: UIButton) {
        
        let reg = self.storyboard?.instantiateViewController(identifier: "SecondViewController") as! SecondViewController
        
        self.navigationController?.pushViewController(reg, animated: true)
        
    }
}

