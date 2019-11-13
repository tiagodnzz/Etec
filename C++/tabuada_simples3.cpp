#include<stdlib.h>
#include<stdio.h>
#include<windows.h>
#include<locale.h>
int main(){
	int i;
		setlocale(LC_ALL, "portuguese");
			printf("\n Repetição-laço \n");
				for(i=1;i<=10;i++){
			printf("\n %i x %i =%i \n",3,i,3*i);
				Sleep(500);
			printf("\n");
								}
					system("pause");
}
