//
//  ThirdViewController.swift
//  navigationcontroller
//

import UIKit

class ThirdViewController: UIViewController {
    
    @IBOutlet var tableimage: UIImageView!
    @IBOutlet var mysegment: UISegmentedControl!
    
    
    @IBOutlet var tableview: UITableView!
    
    var childrens: [childData] = []
    var womens: [womenData] = []
    var farmers: [farmerData] = []
    var seniorcitizens: [seniorData] = []
    
    
    
    override func viewDidLoad() {
        super.viewDidLoad()
        
        childrens = [
            childData(title: "Beti Bachao Beti Padhao", image: UIImage.beti),
            childData(title: "CBSE Udaan Scheme", image: UIImage.cbse),
            childData(title: "Ladli Lakshmi Yojana", image: UIImage.ladli),
            childData(title: "Integrated Child Protection Scheme", image: UIImage.integrate)
        ]
        womens = [
            womenData(title: "Women Helpline Scheme", image: UIImage.helpline),
            womenData(title: "Mahila Coir Yojana", image: UIImage.coir),
            womenData(title: "Mahila Shakti Kendra", image: UIImage.shakti),
            womenData(title: "Mudra Yojana", image: UIImage.mudra)
        ]
        farmers = [
            farmerData(title: "PM-Kisan Samman Nidhi", image: UIImage.nidhi),
            farmerData(title: "Agriculture Infrastructure Fund", image: UIImage.agriculture),
            farmerData(title: "Pradhanmantri Krishi Sinchayee Yojana", image: UIImage.krishi),
            farmerData(title: "Kisan Call Center", image: UIImage.kisancall)
        ]
        seniorcitizens = [
            seniorData(title: "Pradhan Mantri Vaya Vandana scheme", image: UIImage.vandana),
            seniorData(title: "Pension plans", image: UIImage.pension),
            seniorData(title: "Senior Citizen Savings Scheme", image: UIImage.saving),
            seniorData(title: "Pradhan Mantri Jan Arogya Yojana", image: UIImage.arogya)
        ]
        
        
 
    }
    @IBAction func segclicked(_ sender: UISegmentedControl) {
        self.tableview.reloadData()
    }
}

extension ThirdViewController: UITableViewDelegate,UITableViewDataSource{
    
    func tableView(_ tableView: UITableView, numberOfRowsInSection section: Int) -> Int {
        var value = 0
        switch mysegment.selectedSegmentIndex{
        case 0:
            value = childrens.count
            break
        case 1:
            value = womens.count
            break
        case 2:
            value = farmers.count
            break
        case 3:
            value = seniorcitizens.count
            break
        default:
            break
        }
        return value
    }
    
    func tableView(_ tableView: UITableView, cellForRowAt indexPath: IndexPath) -> UITableViewCell {
        let cell = tableView.dequeueReusableCell(withIdentifier: "TableViewCell", for: indexPath) as! TableViewCell
        switch mysegment.selectedSegmentIndex{
        case 0:
            cell.mytitle.text = childrens[indexPath.row].title
            cell.myimage.image = childrens[indexPath.row].image
            break
        case 1:
            cell.mytitle.text = womens[indexPath.row].title
            cell.myimage.image = womens[indexPath.row].image
            break
        case 2:
            cell.mytitle.text = farmers[indexPath.row].title
            cell.myimage.image = farmers[indexPath.row].image
            break
        case 3:
            cell.mytitle.text = seniorcitizens[indexPath.row].title
            cell.myimage.image = seniorcitizens[indexPath.row].image
            break
        default:
            break
        }
        return cell
    }
    
    func tableView(_ tableView: UITableView, didSelectRowAt indexPath: IndexPath) {
        
        let detailVc =  self.storyboard?.instantiateViewController(withIdentifier: "DetaiViewController") as! DetailViewController
        switch mysegment.selectedSegmentIndex{
        case 0:
            detailVc.childrens = childrens[indexPath.row]
            break
        case 1:
            detailVc.womens = womens[indexPath.row]
            break
        case 2:
            detailVc.farmers = farmers[indexPath.row]
            break
        case 3:
            detailVc.seniorcitizens = seniorcitizens[indexPath.row]
            break
        default:
            break
        }

        detailVc.navigationController?.pushViewController(detailVc, animated: true)
    }
}
