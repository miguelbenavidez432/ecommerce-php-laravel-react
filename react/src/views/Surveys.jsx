import { PlusCircleIcon } from "@heroicons/react/24/outline";
import { UseStateContext } from "../Contexts/ContextProvider";
import PageComponents from "../components/PageComponents";
import SurveyListItem from "../components/SurveyListItem";
import TButton from "../components/core/TButton";

export default function Surveys() {
    
    const { surveys } = UseStateContext();

    const onClick = () =>{
        console.log("Delete")
    }

    return (
            <PageComponents
            title='Surveys'
            buttons={(
                <TButton color="green" to="/surveys/create">
                    <PlusCircleIcon className="h-6 w-6 mr-2"/>
                        Create New
                </TButton>
            )}>
                <div className="grid grid-cols-1 gap-5 sm:grid-cols-2 md:grid-cols-3">
                {
                    surveys.map((survey, key) => (
                        <SurveyListItem survey={survey} onClick={onClick} key={key}/>
                    ))
                }
                </div>
                Surveys Contens
            </PageComponents>
        
    )
}