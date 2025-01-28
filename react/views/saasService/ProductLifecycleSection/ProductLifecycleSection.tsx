import { EmphasizedText, Heading2, PageSection, Text1 } from 'src/ui-kit';
import React from 'react';
import { LifecycleGraphLG, LifecycleGraphSX } from 'src/assets/icons';

export const ProductLifecycleSection: React.FC = (): JSX.Element => {
  return (
    <PageSection>
      <div className="flex flex-col justify-center mx-auto text-center max-w-full mb-12 lg:mb-14 lg:max-w-[957px]">
        <Heading2>
          We help SaaS companies
          <EmphasizedText title=" solve challenges " />
          throughout their product lifecycle
        </Heading2>
        <Text1
          fontSize="text-x2-mob"
          className="mt-8 xs:px-[10px] sm:w-auto lg:mt-10"
          title="Whatever challenges you're facing ‒ building a working product, modernizing a legacy app, or integrating your software with third-party systems ‒ we have a professional team to help you succeed.
"
        />
      </div>
      <div className="relative max-w-[1228px] m-auto">
        <LifecycleGraphLG className="hidden sm:inline" />
        <LifecycleGraphSX className="sm:hidden" />
      </div>
    </PageSection>
  );
};
