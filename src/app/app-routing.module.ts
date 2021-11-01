import { NgModule } from "@angular/core";
import { Routes, RouterModule } from '@angular/router';
import { ImpressumComponent } from './impressum/impressum.component';
import { TemplateFormComponent } from "./_template/template-form/template-form.component";

const routes: Routes = [
    {
        path: '', component: TemplateFormComponent,
    },
    {
        path: 'impressum', component: ImpressumComponent,
    }
];

@NgModule({
    imports: [RouterModule.forRoot(routes)],
    exports: [RouterModule]
})
export class AppRoutingModule { }
export const routingComponents = [ImpressumComponent] 