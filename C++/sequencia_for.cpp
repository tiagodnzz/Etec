#include<stdlib.h>
#include<locale.h>
#include<windows.h>
int main(){
int i,entrada;
setlocale(LC_ALL, "Portuguese");
printf("\n Informe um N�mero \n");
scanf("%i",&entrada);
for(i=1;i<=entrada;i++){
	printf("\n %i \n",i);		
		}
system("pause");
}
