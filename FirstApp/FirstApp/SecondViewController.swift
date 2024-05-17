//
//  SecondViewController.swift
//  FirstApp
//
//  Created by student on 08/01/24.
//

import Foundation
import UIKit


class SecondViewController: UIViewController {

    override func viewDidLoad() {
        super.viewDidLoad()
        // Do any additional setup after loading the view.
    }

    @IBOutlet weak var text_area: UILabel!
    
    @IBAction func one(_ sender: Any) {
        text_area.text="1"
    }
    
    @IBAction func two(_ sender: Any) {
        text_area.text="2"
    }
    
    @IBAction func three(_ sender: Any) {
        text_area.text="3"
    }
    
    @IBAction func four(_ sender: Any) {
        text_area.text="4"
    }
    
    @IBAction func five(_ sender: Any) {
        text_area.text="5"
    }
    
    @IBAction func six(_ sender: Any) {
        text_area.text="6"
    }
    
    @IBAction func seven(_ sender: Any) {
        text_area.text="7"
    }
   
    @IBAction func eight(_ sender: Any) {
        text_area.text="8"
    }
    
    @IBAction func nine(_ sender: Any) {
        text_area.text="9"
    }
    
    @IBAction func zero(_ sender: Any) {
        text_area.text="0"
    }
    
    @IBAction func div(_ sender: Any) {
        text_area.text="/"
    }
    
    @IBAction func add(_ sender: Any) {
        text_area.text="+"
    }
    
    @IBAction func subt(_ sender: Any) {
        text_area.text="-"
    }
    
    @IBAction func mul(_ sender: Any) {
        text_area.text="*"
    }
    
    @IBAction func per(_ sender: Any) {
        text_area.text="%"
    }
    
    @IBAction func power(_ sender: Any) {
        text_area.text="^"
    }
}
