//
//  TaskViewController.swift
//  To-do List App
//
//  Created by student on 13/05/24.
//

import UIKit

class TaskViewController: UIViewController {

    @IBOutlet var label: UILabel!
    
    var task: String?
    
    override func viewDidLoad() {
        super.viewDidLoad()
        
        
        label.text = task
        
        navigationItem.rightBarButtonItem = UIBarButtonItem(title: "delete", style: .done, target: self, action: #selector(deleteTask))
        // Do any additional setup after loading the view.
    }
    
    @objc func deleteTask() {
//
//        let newCount = count - 1
//        UserDefaults().setValue(newCount, forKey: "count")
//        
//        UserDefaults().setValue(nil, forKey: "task_\(currentPosition)")
    }
    

    
}
