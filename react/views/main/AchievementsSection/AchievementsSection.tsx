import React from 'react';
import { ACHIEVEMENTS } from './constants';
import { AchievementCard } from 'src/components';
import { BorderedBox, PageSection } from 'src/ui-kit';

export const AchievementsSection: React.FC = (): JSX.Element => {
  return (
    <PageSection>
      <ul className="grid grid-cols-1 gap-5 mx-auto xs:grid-cols-2-1 1xl:grid-cols-4-1 1xl:flex 1xl:justify-between">
        {ACHIEVEMENTS.map((achievement) => (
          <BorderedBox
            className="group/withoutHover justify-self-center group xs:odd:justify-self-end xs:even:justify-self-start"
            key={achievement.id}
          >
            <AchievementCard {...achievement} />
          </BorderedBox>
        ))}
      </ul>
    </PageSection>
  );
};
