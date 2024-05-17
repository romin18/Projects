//
//  ViewController.swift
//  SegmentedControl
//
//  Created by student on 16/01/24.
//

import UIKit

class ViewController: UIViewController {

    @IBOutlet var mysegment: UISegmentedControl!
    
    @IBOutlet var mylbl: UILabel!
    
    @IBOutlet var myimg: UIImageView!
    
    @IBAction func mysegment(_ sender: UISegmentedControl) {
        if mysegment.selectedSegmentIndex == 0{
            myimg.image = UIImage.google
            mylbl.text = "Google"
        }
        else if mysegment.selectedSegmentIndex == 1{
            mylbl.text = "Youtube"
            myimg.image = UIImage.utube
        }
        else if mysegment.selectedSegmentIndex == 2{
            mylbl.text = "Twitter"
            myimg.image = UIImage.twitter
        }
        else if mysegment.selectedSegmentIndex == 3{
            mylbl.text = "Facebook"
            myimg.image = UIImage.facebook
        }
    }
    override func viewDidLoad() {
        
        super.viewDidLoad()
        // Do any additional setup after loading the view.
    }


}

