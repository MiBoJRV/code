import { EmphasizedText, Heading2, PageSection, Text2 } from 'src/ui-kit';
import { BracketLeftIcon, BracketRightIcon } from 'src/assets/icons';

export const MeetSection = (): JSX.Element => (
  <PageSection>
    <div className="max-w-full mx-auto flex items-center justify-center text-center relative 1xl:px-[91px]">
      <div className="self-start">
        <BracketLeftIcon className="hidden h-auto w-auto lg:block" />
      </div>
      <div className="max-w-[100%] mx-auto ">
        <div className="relative flex items-center ">
          <BracketLeftIcon className="block absolute -left-2 h-full lg:hidden" />
          <Heading2 className="p-4 sm:p-8 lg:p-0">
            <EmphasizedText title="Meet" /> and
            <EmphasizedText title=" exceed" /> your customers' expectations
            <EmphasizedText title=" effortlessly" />
          </Heading2>
          <BracketRightIcon className="block absolute -right-2 h-full lg:hidden" />
        </div>
        <Text2
          className="mt-9 sm:ml-0 sm:w-auto lg:text-x1 1xl:px-20 xxl:p-0"
          title="By using our services, you can deliver exactly what your customers want without the added complications, costs, and risks. Our goal is to help you build, modernize, and integrate the applications you need to stay competitive in the market.
"
        />
      </div>
      <div className="self-start">
        <BracketRightIcon className="hidden h-full lg:block" />
      </div>
    </div>
  </PageSection>
);
